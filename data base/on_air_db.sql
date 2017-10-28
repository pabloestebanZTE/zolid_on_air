create database on_air;
use on_air;


/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     10/28/2017 12:45:07 PM                       */
/*==============================================================*/


drop table if exists BAND;

drop table if exists CITY;

drop table if exists FOLLOW_UP_12H;

drop table if exists FOLLOW_UP_24H;

drop table if exists FOLLOW_UP_36H;

drop table if exists ON_AIR24H;

drop table if exists ON_AIR_12H;

drop table if exists ON_AIR_36H;

drop table if exists PRECHECK;

drop table if exists PREPARATION_STAGE;

drop table if exists REGIONAL;

drop table if exists SCALED;

drop table if exists SCALED_ON_AIR;

drop table if exists STATION;

drop table if exists STATUS;

drop table if exists STATUS_ON_AIR;

drop table if exists SUBSTATUS;

drop table if exists TECHNOLOGY;

drop table if exists TICKET_ON_AIR;

drop table if exists USER;

drop table if exists WORK;

/*==============================================================*/
/* Table: BAND                                                  */
/*==============================================================*/
create table BAND
(
   K_ID_BAND            int not null,
   N_NAME_BAND          varchar(50) not null,
   primary key (K_ID_BAND)
);

/*==============================================================*/
/* Table: CITY                                                  */
/*==============================================================*/
create table CITY
(
   K_ID_CITY            int not null,
   K_ID_REGIONAL        int,
   N_NAME_CITY          varchar(100) not null,
   primary key (K_ID_CITY)
);

/*==============================================================*/
/* Table: FOLLOW_UP_12H                                         */
/*==============================================================*/
create table FOLLOW_UP_12H
(
   K_ID_FOLLOW_UP_12H   int not null,
   K_ID_USER            int,
   primary key (K_ID_FOLLOW_UP_12H)
);

/*==============================================================*/
/* Table: FOLLOW_UP_24H                                         */
/*==============================================================*/
create table FOLLOW_UP_24H
(
   K_ID_FOLLOW_UP_24H   int not null,
   K_ID_USER            int,
   primary key (K_ID_FOLLOW_UP_24H)
);

/*==============================================================*/
/* Table: FOLLOW_UP_36H                                         */
/*==============================================================*/
create table FOLLOW_UP_36H
(
   K_ID_FOLLOW_UP_36H   int not null,
   K_ID_USER            int,
   primary key (K_ID_FOLLOW_UP_36H)
);

/*==============================================================*/
/* Table: ON_AIR24H                                             */
/*==============================================================*/
create table ON_AIR24H
(
   K_ID_24H_REAL        int not null,
   K_ID_ONAIR           int,
   K_ID_FOLLOW_UP_24H   int,
   D_FIN24H             datetime,
   primary key (K_ID_24H_REAL)
);

/*==============================================================*/
/* Table: ON_AIR_12H                                            */
/*==============================================================*/
create table ON_AIR_12H
(
   K_ID_12H_REAL        int not null,
   K_ID_FOLLOW_UP_12H   int,
   K_ID_ONAIR           int,
   D_FIN12H             date,
   primary key (K_ID_12H_REAL)
);

/*==============================================================*/
/* Table: ON_AIR_36H                                            */
/*==============================================================*/
create table ON_AIR_36H
(
   K_ID_36H_REAL        int not null,
   K_ID_FOLLOW_UP_36H   int,
   K_ID_ONAIR           int,
   D_FIN36H             datetime,
   primary key (K_ID_36H_REAL)
);

/*==============================================================*/
/* Table: PRECHECK                                              */
/*==============================================================*/
create table PRECHECK
(
   K_ID_PRECHECK        int not null,
   K_ID_USER            int,
   D_FINPRE             datetime,
   primary key (K_ID_PRECHECK)
);

/*==============================================================*/
/* Table: PREPARATION_STAGE                                     */
/*==============================================================*/
create table PREPARATION_STAGE
(
   K_ID_PREPARATION     int not null,
   N_BCF_WBTS_ID        varchar(100),
   N_BTS_ID             varchar(100),
   D_INGRESO_ON_AIR     datetime,
   B_VISTAMM            bool,
   N_ENTEEJECUTOR       varchar(100),
   N_CONTROLADOR        varchar(100),
   N_IDCONTROLADOR      varchar(100),
   D_CORRECCIONESPENDIENTES datetime,
   N_BTSIPADDRESS       varchar(100),
   N_INTEGRADOR         varchar(100),
   N_WP                 varchar(100),
   N_CRQ                varchar(100),
   N_TESTGESTION        varchar(100),
   N_SITIOLIMPIO        varchar(100),
   N_INSTALACION_HW_SITIO varchar(100),
   N_CAMBIOS_CONFIG_SOLICITADOS varchar(100),
   N_CAMBIOS_CONFIG_FINAL varchar(100),
   N_CONTRATISTA__      varchar(100),
   N_COMENTARIOCCIAL__  varchar(100),
   N_TICKETREMEDY__     varchar(100),
   N_LAC                varchar(100),
   N_RAC                varchar(100),
   N_SAC                varchar(100),
   N_INTEGRACION_GESTION_Y_TRAFICA varchar(100),
   PUESTA_SERVICIO_SITIO_NUEVO_LTE__ varchar(100),
   N_INSTALACION_HW_4G_SITIO__ varchar(100),
   PRE_LAUNCH           varchar(100),
   N_EVIDENCIASL__      varchar(100),
   IDENCIASL__          varchar(100),
   I_WEEK               int,
   ID_NOTIFICACION__    varchar(100),
   ID_DOCUMENTACION__   varchar(100),
   ID_RFTOOLS__         varchar(100),
   primary key (K_ID_PREPARATION)
);

/*==============================================================*/
/* Table: REGIONAL                                              */
/*==============================================================*/
create table REGIONAL
(
   K_ID_REGIONAL        int not null,
   N_NAME_REGIONAL      varchar(100) not null,
   primary key (K_ID_REGIONAL)
);

/*==============================================================*/
/* Table: SCALED                                                */
/*==============================================================*/
create table SCALED
(
   K_ID_SACLED          int not null,
   primary key (K_ID_SACLED)
);

/*==============================================================*/
/* Table: SCALED_ON_AIR                                         */
/*==============================================================*/
create table SCALED_ON_AIR
(
   K_ID_SCALED_ON_AIR   int not null,
   K_ID_ONAIR           int,
   K_ID_SACLED          int,
   D_TIME_ESCALADO__    datetime,
   D_FECHA_ESCALADO     datetime,
   I_CONT_ESC_IMP       int,
   TIME_ESC_IMP__       int,
   I_CONT_ESC_RF__      int,
   I_TIME_ESC_RF__      int,
   CONT_ESC_NPO__       int,
   I_TIME_ESC_NPO__     int,
   CONT_ESC_CARE__      int,
   I_TIME_ESC_CARE__    int,
   I_CONT_ESC_GDRT__    int,
   I_TIME_ESC_GDRT__    int,
   I_CONT_ESC_OYM__     int,
   TIME_ESC_OYM__       int,
   CONT_ESC_CALIDAD__   int,
   I_TIME_ESC_CALIDAD__ int,
   N_TIPIFICACION_SOLUCION varchar(100),
   N_DETALLE_SOLUCION   varchar(300),
   N_ULTIMO_SUBESTADO_DE_ESCALAMIENTO varchar(100),
   primary key (K_ID_SCALED_ON_AIR)
);

/*==============================================================*/
/* Table: STATION                                               */
/*==============================================================*/
create table STATION
(
   K_ID_STATION         int not null,
   K_ID_CITY            int,
   N_NAME_STATION       varchar(100) not null,
   primary key (K_ID_STATION)
);

/*==============================================================*/
/* Table: STATUS                                                */
/*==============================================================*/
create table STATUS
(
   K_ID_STATUS          int not null,
   N_NAME_STATUS        varchar(100) not null,
   primary key (K_ID_STATUS)
);

/*==============================================================*/
/* Table: STATUS_ON_AIR                                         */
/*==============================================================*/
create table STATUS_ON_AIR
(
   K_ID_STATUS_ONAIR    int not null,
   K_ID_SUBSTATUS       int,
   K_ID_STATUS          int,
   primary key (K_ID_STATUS_ONAIR)
);

/*==============================================================*/
/* Table: SUBSTATUS                                             */
/*==============================================================*/
create table SUBSTATUS
(
   K_ID_SUBSTATUS       int not null,
   N_NAME_SUBSTATUS     varchar(100) not null,
   primary key (K_ID_SUBSTATUS)
);

/*==============================================================*/
/* Table: TECHNOLOGY                                            */
/*==============================================================*/
create table TECHNOLOGY
(
   K_ID_TECHNOLOGY      int not null,
   N_NAME_TECHNOLOGY    varchar(50) not null,
   primary key (K_ID_TECHNOLOGY)
);

/*==============================================================*/
/* Table: TICKET_ON_AIR                                         */
/*==============================================================*/
create table TICKET_ON_AIR
(
   K_ID_ONAIR           int not null,
   K_ID_STATUS_ONAIR    int,
   K_ID_WORK            int,
   K_ID_PREPARATION     int,
   K_ID_STATION         int,
   K_ID_TECHNOLOGY      int,
   K_ID_BAND            int,
   K_ID_PRECHECK        int,
   B_EXCPETION_GRI      bool,
   D_FECHA_ULTIMA_REV   datetime,
   D_DESBLOQUEO         datetime,
   D_BLOQUEO            datetime,
   N_REVIEWEDFO         varchar(100),
   D_FECHAPRODUCCION    datetime,
   N_SECTORESBLOQUEADOS varchar(100),
   N_SECTORESDESBLOQUEADOS varchar(100),
   N_ESTADOONAIR        varchar(100),
   N_ATRIBUIBLE_NOKIA__ varchar(100),
   N_KPIS_DEGRADED__    varchar(10),
   N_ATRIBUIBLE_NOKIA2  varchar(100),
   N_KPI1               varchar(100),
   N_KPI2               varchar(100),
   N_KPI3               varchar(100),
   N_KPI4               varchar(100),
   I_VALOR_KPI1         int,
   I_VALOR_KPI2         int,
   I_VALOR_KPI3         int,
   I_VALOR_KPI4         int,
   N_ALARMA1            varchar(20),
   N_ALARMA2            varchar(20),
   N_ALARMA3            varchar(20),
   N_ALARMA4            varchar(20),
   I_CONT_TOTAL_ESCALAMIENTO int,
   I_TIME_TOTAL_ESCALAMIENTO int,
   I_LIDER_CAMBIO       int,
   I_LIDER_CUADRILLA    int,
   N_IMPLEMENTACION_CAMPO__ varchar(20),
   N_DOC__              varchar(20),
   N_GESTION_POWER__    varchar(20),
   N_OBRA_CIVIL__       varchar(20),
   ON_AIR__             varchar(20),
   FECHA_RFT__          datetime,
   D_FECHA_CG           datetime,
   N_EXCLUSION_BAJO_TRAFICO__ varchar(100),
   N_TICKET__           varchar(100),
   N_ESTADO_TICKET__    varchar(100),
   N_SLN_MODERNIZACION__ varchar(100),
   N_EN_PRORROGA__      varchar(100),
   N_CONT_PRORROGAS__   int,
   N_NOC                varchar(100),
   primary key (K_ID_ONAIR)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   K_ID_USER            int not null,
   N_NAME_USER          varchar(150) not null,
   N_LAST_NAME_USER     varchar(150) not null,
   N_USERNAME_USER      varchar(100) not null,
   primary key (K_ID_USER)
);

/*==============================================================*/
/* Table: WORK                                                  */
/*==============================================================*/
create table WORK
(
   K_ID_WORK            int not null,
   N_NAME_ORK           varchar(200) not null,
   primary key (K_ID_WORK)
);

alter table CITY add constraint FK_CITY_REG foreign key (K_ID_REGIONAL)
      references REGIONAL (K_ID_REGIONAL) on delete restrict on update restrict;

alter table FOLLOW_UP_12H add constraint FK_12H_USER foreign key (K_ID_USER)
      references USER (K_ID_USER) on delete restrict on update restrict;

alter table FOLLOW_UP_24H add constraint FK_24H_USER foreign key (K_ID_USER)
      references USER (K_ID_USER) on delete restrict on update restrict;

alter table FOLLOW_UP_36H add constraint FK_36H_USER foreign key (K_ID_USER)
      references USER (K_ID_USER) on delete restrict on update restrict;

alter table ON_AIR24H add constraint FK_FOLLOW_24H foreign key (K_ID_FOLLOW_UP_24H)
      references FOLLOW_UP_24H (K_ID_FOLLOW_UP_24H) on delete restrict on update restrict;

alter table ON_AIR24H add constraint FK_ON_AIR_24H foreign key (K_ID_ONAIR)
      references TICKET_ON_AIR (K_ID_ONAIR) on delete restrict on update restrict;

alter table ON_AIR_12H add constraint FK_FOLLOW_12H foreign key (K_ID_FOLLOW_UP_12H)
      references FOLLOW_UP_12H (K_ID_FOLLOW_UP_12H) on delete restrict on update restrict;

alter table ON_AIR_12H add constraint FK_ON_AIR_12H foreign key (K_ID_ONAIR)
      references TICKET_ON_AIR (K_ID_ONAIR) on delete restrict on update restrict;

alter table ON_AIR_36H add constraint FK_FOLLOW_36 foreign key (K_ID_FOLLOW_UP_36H)
      references FOLLOW_UP_36H (K_ID_FOLLOW_UP_36H) on delete restrict on update restrict;

alter table ON_AIR_36H add constraint FK_ON_AIR_36H foreign key (K_ID_ONAIR)
      references TICKET_ON_AIR (K_ID_ONAIR) on delete restrict on update restrict;

alter table PRECHECK add constraint FK_PRECHECK_USER foreign key (K_ID_USER)
      references USER (K_ID_USER) on delete restrict on update restrict;

alter table SCALED_ON_AIR add constraint FK_ON_AIR_SCALED foreign key (K_ID_ONAIR)
      references TICKET_ON_AIR (K_ID_ONAIR) on delete restrict on update restrict;

alter table SCALED_ON_AIR add constraint FK_SCALED_REAL foreign key (K_ID_SACLED)
      references SCALED (K_ID_SACLED) on delete restrict on update restrict;

alter table STATION add constraint FK_STATION_CITY foreign key (K_ID_CITY)
      references CITY (K_ID_CITY) on delete restrict on update restrict;

alter table STATUS_ON_AIR add constraint FK_STATUS_ONAIR foreign key (K_ID_SUBSTATUS)
      references SUBSTATUS (K_ID_SUBSTATUS) on delete restrict on update restrict;

alter table STATUS_ON_AIR add constraint FK_SUBSTATUS_ONAIR foreign key (K_ID_STATUS)
      references STATUS (K_ID_STATUS) on delete restrict on update restrict;

alter table TICKET_ON_AIR add constraint FK_ON_AIR_BAND foreign key (K_ID_BAND)
      references BAND (K_ID_BAND) on delete restrict on update restrict;

alter table TICKET_ON_AIR add constraint FK_ON_AIR_PRECHECK foreign key (K_ID_PRECHECK)
      references PRECHECK (K_ID_PRECHECK) on delete restrict on update restrict;

alter table TICKET_ON_AIR add constraint FK_ON_AIR_PREP_STAGE foreign key (K_ID_PREPARATION)
      references PREPARATION_STAGE (K_ID_PREPARATION) on delete restrict on update restrict;

alter table TICKET_ON_AIR add constraint FK_ON_AIR_STATION foreign key (K_ID_STATION)
      references STATION (K_ID_STATION) on delete restrict on update restrict;

alter table TICKET_ON_AIR add constraint FK_ON_AIR_STATUS foreign key (K_ID_STATUS_ONAIR)
      references STATUS_ON_AIR (K_ID_STATUS_ONAIR) on delete restrict on update restrict;

alter table TICKET_ON_AIR add constraint FK_ON_AIR_TECHNOLOGY foreign key (K_ID_TECHNOLOGY)
      references TECHNOLOGY (K_ID_TECHNOLOGY) on delete restrict on update restrict;

alter table TICKET_ON_AIR add constraint FK_ON_AIR_WORK foreign key (K_ID_WORK)
      references WORK (K_ID_WORK) on delete restrict on update restrict;
