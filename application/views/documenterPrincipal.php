<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('parts/generic/head'); ?>
    <body data-base="<?= URL::base() ?>">
        <?php $this->load->view('parts/generic/header'); ?>
        <div class="container autoheight p-t-20">
            <div class="col-md-12">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class="fa fa-fw fa-info"></i> Información básica</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <form class="form-horizontal well">
                                    <div class="panel-body">                                                                   
                                        <fieldset class="col-md-6 control-label">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Estacion:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-street-view"></i></span>
                                                        <input type="text" name="txtEstacion" id="txtEstacion" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Banda:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-signal"></i></span>
                                                        <input type="text" name="txtBanda" id="txtBanda" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Regional:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-globe"></i></span>
                                                        <input type="text" name="txtRegional" id="txtRegional" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Ingeniero:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                                                        <input type="text" name="txtIngeniero" id="txtIngeniero" class="form-control" value="" readonly="flase">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!--  fin seccion izquierda form---->

                                        <!--  inicio seccion derecha form---->
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tecnologia:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-tablet"></i></span>
                                                        <input type="text" name="txtTecnologia" id="txtTecnologia" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tipo de trabajo:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-briefcase"></i></span>
                                                        <input type="text" name="txtTipotrabajo" id="txtTipotrabajo" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Ciudad:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-location-arrow"></i></span>
                                                        <input type="text" name="txtTipotrabajo" id="txtTipotrabajo" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!--   fin seccion derecha---->                      
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <form class="form-horizontal well">
                                    <div class="panel-body">                                                                   
                                        <fieldset class="col-md-6 control-label">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Estado:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-list-ul"></i></span>
                                                        <select name="cmbEstado" id="cmbEstado" class="form-control selectpicker" required>
                                                            <option value="" >Seleccione el estado</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Subestado:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-list-ol"></i></span>
                                                        <select name="cmbSubestado" id="cmbSubestado" class="form-control selectpicker" required>
                                                            <option value="" >Seleccione el Subestado</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Excepción GRI:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-globe"></i></span>
                                                        <select name="cmbExcepciongri" id="cmbExcepciongri" class="form-control selectpicker" required>
                                                            <option value="true" >Si</option>
                                                            <option value="false" >No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Fecha de desbloqueo:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-unlock"></i></span>
                                                        <input type="text" class="form-control input-sm" id="txtDesbloqueo" name="txtDesbloqueo" placeholder="DD/MM/YYYY" />
                                                        <div class="input-group-btn"><button class="btn btn-default btn-sm"><i class="fa fa-fw fa-calendar"></i></button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!--  fin seccion izquierda form---->

                                        <!--  inicio seccion derecha form---->
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Fecha de bloqueo:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                                                        <input type="text" class="form-control input-sm" id="txtBloqueado" name="txtBloqueado" placeholder="DD/MM/YYYY" />
                                                        <div class="input-group-btn"><button class="btn btn-default btn-sm"><i class="fa fa-fw fa-calendar"></i></button></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Sectores bloqueados:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-times-circle"></i></span>
                                                        <input type="text" name="txtSectoresBloqueados" id="txtSectoresBloqueados" class="form-control" value="" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Sectores desbloqueados:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-check-circle"></i></span>
                                                        <input type="text" name="txtSectoresDesbloqueados" id="txtSectoresDesbloqueados" class="form-control" value="" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Estado On Air:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-cloud"></i></span>
                                                        <select name="cmbEstadoOnAir" id="cmbEstadoOnAir" class="form-control selectpicker" required>
                                                            <option value="" >Seleccione el Estado</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!--   fin seccion derecha---->   
                                        <!-- Button -->
                                        <center>
                                            <div class="form-group">
                                                <label class="col-md-12 control-label"></label>
                                                <div class="col-md-12">
                                                    <button type="submit" id="btnGuardar" class="btn btn-primary" onclick = "this.form.action = 'http://localhost/Datafill_OT/index.php/SpecificService/saveServiceS'">Guardar <span class="fa fa-fw fa-floppy-o"></span></button>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><i class="fa fa-fw fa-list"></i> Detalles</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="panel-body">
                                    <div class="stepwizard col-md-offset-3 m-t-10 m-b-25">
                                        <div class="stepwizard-row setup-panel">
                                            <div class="stepwizard-step">
                                                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                                <!--<p>Parte 1</p>-->
                                            </div>
                                            <div class="stepwizard-step">
                                                <a href="#step-2" type="button" class="btn btn-default btn-circle" >2</a>
                                                <!--<p>Parte 2</p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="display-block p-l-40 p-r-40 m-b-0 well step-panel" id="step-1">
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
                                        </form>
                                    </div>
                                    <div class="hidden well display-block p-l-40 p-r-40 m-b-0 step-panel" id="step-2">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                        
            </div>

        </div>
        <!--footer Section -->
        <div class="for-full-back" id="footer">
            Zolid By ZTE Colombia | All Right Reserved
        </div>
        <?php $this->load->view('parts/generic/scripts'); ?>
        <!-- CUSTOM SCRIPT   -->
        <link href="<?= URL::to('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" type="text/css"/>
        <script src="<?= URL::to('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js?v=1') ?>" type="text/javascript"></script>
        <script src="<?= URL::to('assets/plugins/jquery.mask.js') ?>" type="text/javascript"></script>
        <script src="<?= URL::to('assets/js/modules/documenterPrincipal.js') ?>" type="text/javascript"></script>
    </body>
</html>
