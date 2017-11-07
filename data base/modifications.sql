ALTER TABLE user add n_mail_user varchar(100);
ALTER TABLE user add i_phone_user integer;
ALTER TABLE user add i_cellphone_user integer;
ALTER TABLE user add n_password varchar(30);
ALTER TABLE user add n_role_user varchar(100);

ALTER TABLE ticket_on_air add n_round integer;
ALTER TABLE ticket_on_air add d_finish datetime;
ALTER TABLE ticket_on_air add d_temporal datetime;
ALTER TABLE follow_up_12h add n_round integer;
ALTER TABLE follow_up_24h add n_round integer;
ALTER TABLE follow_up_36h add n_round integer;
ALTER TABLE scaled_on_air add n_round integer;

ALTER TABLE ticket_on_air add d_actualizacion_final datetime;
ALTER TABLE ticket_on_air add d_asignacion_final datetime;

ALTER TABLE on_air_12h add n_comentario varchar(1000);
ALTER TABLE on_air24h add n_comentario varchar(1000);
ALTER TABLE on_air_36h add n_comentario varchar(1000);
