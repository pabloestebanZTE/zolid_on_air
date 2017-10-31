<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Zolid ZTE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--   ICONO PAGINA    -->
        <link rel="icon" href="http://cellaron.com/media/wysiwyg/zte-mwc-2015-8-l-124x124.png">
        <!--   BOOTSTRAP    -->
        <link rel="stylesheet" href="<?= URL::to('assets/plugins/bootstrap/css/bootstrap.min.css') ?>"/>->
        <link rel="stylesheet" href="<?= URL::to('assets/plugins/font-awesome/css/font-awesome.min.css') ?>"/>
        <!--   CSS ESTILOS PRINCIPAL    -->
        <link rel='stylesheet' type='text/css'  href='http://fonts.googleapis.com/css?family=Open+Sans'/>
        <!-- CSS BOOTSTRAP-TABLE-->
        <link rel="stylesheet" href="<?= URL::to('assets/plugins/datatables/css/dataTables.bootstrap.min.css?v=1.0') ?>">
        <link rel="stylesheet" href="<?= URL::to('assets/plugins/sweetalert-master/dist/sweetalert.css') ?>" />
        <link href="<?= URL::to('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?= URL::to('assets/css/helper-class.css') ?>">
        <link rel="stylesheet" href="<?= URL::to('assets/css/stylePrincipal.css?v=1.1') ?>" />
    </head>
    <body data-base="<?= URL::base() ?>">
        <!-- Navigation -->
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo"><img id="logo" src="<?= URL::to('assets/img/logo2.png') ?>"/></a>
                    </div>
                    <!-- Collect the nav links for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- <li class="cam"><a >Bienvenid@ <?php echo $_SESSION['userName'] ?></a> -->
                            </li>
                            <li class="cam"><a href="#home">Home</a>
                            </li>
                            <li class="cam"><a href="#services">Servicios</a>
                                <ul>
                                    <li><a href="#">Agendar Actividad</a></li>
                                    <li><a href="#">Ver Actividades</a></li>
                                    <li><a href="#">Ver</a></li>
                                </ul>
                            </li>
                            <li class="cam"><a href="#">servicios</a>
                            </li>
                            <li class="cam"><a href="#contact-sec">Contactos</a>
                            </li>
                            </li>
                            <li class="cam"><a href="<?= URL::to('index.php/welcome/index') ?>" />Salir</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--End Navigation -->
        <div class="container autoheight p-t-20">
            <div class="alert alert-success alert-dismissable hidden" id="principalAlert">
                <a href="#" class="close">&times;</a>
                <p id="text" class="m-b-0 p-b-0"></p>
            </div>

            <!-- TRACKING DETAILS FORM -->
            <form class="well form-horizontal" action="" method="post" id="assignService" name="assignServie" enctype="multipart/form-data">
                <fieldset>
                    <div class="col-md-12">
                        <button id="btnDetails" type="button" class="btn btn-primary"><i class="fa fa-fw fa-home"></i> Detalles de Inicio</button>
                    </div>
                </fieldset>
            </form>
            <!-- FIN TRACKING DETAILS FORM -->

        </div>

        <!--footer Section -->
        <div class="for-full-back" id="footer">
            Zolid By ZTE Colombia | All Right Reserved
        </div>
        <!--End footer Section -->

        <!-- MODAL DETALLES INICIO -->
        <div id="modalDetailsInit" class="modal fade" role="dialog" >
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-fw fa-list"></i> Detalles / Preckeck</h4>
                    </div>
                    <div class="modal-body p-t-15 p-b-15 p-l-15 p-r-15">
                        <div class="display-block well m-b-0">
                            <form class="row form-xs">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtBCFWBTS">BCF WBTS:</label>
                                        <input type="text" class="form-control input-sm" id="txtBCFWBTS" placeholder="BCF WBTS" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtBTS">BTS:</label>
                                        <input type="text" class="form-control input-sm" id="txtBTS" name="preparation_stage" placeholder="BTS" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtFechaIngresoOnAir">Fecha ingreso On Air:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control input-sm" id="txtFechaIngresoOnAir" placeholder="DD/MM/YYYY" />
                                            <div class="input-group-btn"><button class="btn btn-default btn-sm"><i class="fa fa-fw fa-calendar"></i></button></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cmbVistaMM">Vista MM:</label>
                                        <select class="form-control input-sm" id="cmbVistaMM" >
                                            <option value="">Selecione</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cmbEnteEjecutor">Ente Ejecutor:</label>
                                        <select id="cmbEnteEjecutor" class="form-control input-sm">
                                            <option value="">Seleccione</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtControlador">Controlador:</label>
                                        <input type="text" id="txtControlador" class="form-control input-sm" placeholder="Controlador" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtCorrecionPendientes">Correción pendientes:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control input-sm" id="txtCorrecionPendientes" name="" value="" placeholder="DD/MM/YYYY" />
                                            <div class="input-group-btn">
                                                <button class="btn btn-default btn-sm"><i class="fa fa-fw fa-calendar"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtBtsIpAddress">BTS IP Address:</label>
                                        <input type="text" class="form-control input-sm" placeholder="BTS IP Address" id="txtBtsIpAddress" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtIntegrador">Integrador:</label>
                                        <input type="text" class="form-control input-sm" id="txtIntegrador" placeholder="Integrador" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtWP">WP:</label>
                                        <input type="text" class="form-control input-sm" id="txtWP" placeholder="WP" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtCRQ">CRQ:</label>
                                        <input type="txtCRQ" class="form-control input-sm" id="txtCRQ" placeholder="CRQ" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtTestGestion">Test Gestión:</label>
                                        <select class="form-control input-sm" name="" id="txtTestGestion">
                                            <option value="">Seleccione</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cmbSitioLimpio">Instalación HW Sitio:</label>
                                        <select id="cmbSitioLimpio" class="form-control input-sm">
                                            <option>Seleccione</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cmbCambiosConfigSolicitados">Cambios Config Solicitados:</label>
                                        <select id="cmbCambiosConfigSolicitados" class="form-control input-sm">
                                            <option>Seleccione</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cmbCambiosSolicitados">Cambios Config Solicitados:</label>
                                        <select class="form-control input-sm" id="cmbCambiosSolicitados" >
                                            <option>Seleccione</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtContratista">Contratista:</label>
                                        <input type="text" class="form-control input-sm" id="txtContratista" placeholder="Contratista" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="txtComentarioSocial">Comentario Social:</label>
                                        <textarea class="form-control input-sm" id="txtComentarioSocial" rows="3" placeholder="Escriba aquí..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtTicketTremedy">Ticket Tremedy:</label>
                                        <input type="text" class="form-control input-sm" id="txtTicketTremedy" placeholder="Tiecket Tremedy"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtLAC">LAC:</label>
                                        <input type="text" class="form-control input-sm" id="txtLAC" placeholder="LAC" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtRAC">RAC:</label>
                                        <input type="text" class="form-control input-sm" id="txtRAC" placeholder="RAC" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtSAC">SAC:</label>                                        
                                        <input type="text" class="form-control input-sm" id="txtSAC" placeholder="SAC"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cmbIntegracionGestionYTrafica">Int. Gestión y Tráfica:</label>
                                        <select class="form-control input-sm" id="cmbIntegracionGestionYTrafica">
                                            <option>Seleccione</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cmbPuestaServicioSitioNuevoLTE">Puesta Sitio Nuevo LTE:</label>
                                        <select class="form-control input-sm" id="cmbPuestaServicioSitioNuevoLTE">
                                            <option>Seleccione</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cmbInstalacionHW4GSitio">Instalación HW 4G Sitio:</label>
                                        <select id="cmbInstalacionHW4GSitio" class="form-control input-sm">
                                            <option>Seleccione</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cmbPrelaunch">Prelaunch:</label>
                                        <select class="form-control input-sm" id="cmbPrelaunch">
                                            <option>Seleccione</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtEvidenciaSL">Evidencia SL:</label>
                                        <input type="text" class="form-control input-sm" placeholder="Evidencia SL" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtEvidenciaTG">Evidencia TG:</label>
                                        <input type="text" class="form-control input-sm" id="txtEvidenciaTG" placeholder="Evidencia TG" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="nmbWeek">WEEK:</label>
                                        <input type="number" class="form-control input-sm" placeholder="Week" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtIdNotificacion">Id Notificación:</label>
                                        <input type="text" class="form-control input-sm" id="txtIdNotificacion" placeholder="Id Notificación" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtIdDocumentacion">Id Documentación:</label>
                                        <input type="text" class="form-control input-sm" id="txtIdDocumentacion" placeholder="Id Documentación" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtIdRFTools">Id RFTools:</label>
                                        <input type="text" class="form-control input-sm" id="txtIdRFTools" placeholder="Id RFTools" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtFechaApertura">Fecha de apertura:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control input-sm" id="txtFechaApertura" name="" value="" placeholder="DD/MM/YYYY">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default btn-sm"><i class="fa fa-fw fa-calendar"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-fw fa-check"></i> Aceptar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-fw fa-times"></i> Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN MODAL DETALLES INICIO -->

        <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
        <!-- CORE JQUERY  -->
        <script src="<?= URL::to('assets/plugins/jquery-1.10.2.js') ?>" /></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="<?= URL::to('assets/plugins/bootstrap/js/bootstrap.min.js') ?>" /></script>
<!-- PARALLAX SCRIPT   -->
<script src="<?= URL::to('assets/plugins/4jquery.parallax-1.1.3.js') ?>" /></script>
<!-- CUSTOM SCRIPT   -->
<script src="<?= URL::to('assets/js/custom.js') ?>" /></script>
<!--BOOTSTRAP-TABLE SCRIPT-->
<script src="<?= URL::to('assets/plugins/datatables/js/jquery.dataTables.js?v=1.0') ?>"></script>
<script src="<?= URL::to('assets/plugins/datatables/js/dataTables.bootstrap.js?v=1.0') ?>"></script>
<script src="<?= URL::to("assets/js/utils/app.global.js?v=1.0") ?>" type="text/javascript"></script>
<script src="<?= URL::to("assets/js/utils/app.dom.js?v=1.0") ?>" type="text/javascript"></script>
<script scr="<?= URL::to("assets/plugins/sweetalert-master/dist/sweetalert.min.js") ?>" ></script>
<script src="<?= URL::to('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js?v=1') ?>" type="text/javascript"></script>
<script src="<?= URL::to('assets/plugins/jquery.mask.js') ?>" type="text/javascript"></script>
<script src="<?= URL::to('assets/js/modules/tracking-details.js?v=1.1') ?>" type="text/javascript"></script>
</body>
</html>
