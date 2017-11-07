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
                                                <label for="txtEstacion" class="col-md-3 control-label">Estación:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-street-view"></i></span>
                                                        <input type="text" name="txtEstacion" id="txtEstacion" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtBanda" class="col-md-3 control-label">Banda:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-signal"></i></span>
                                                        <input type="text" name="txtBanda" id="txtBanda" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtRegional" class="col-md-3 control-label">Regional:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-globe"></i></span>
                                                        <input type="text" name="txtRegional" id="txtRegional" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtIngeniero" class="col-md-3 control-label">Ingeniero:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                                                        <input type="text" name="txtIngeniero" id="txtIngeniero" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtFechaIngresoOnAir" class="col-md-3 control-label">Fecha ingreso On Air:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-calendar"></i></span>
                                                        <input type="text" name="txtFechaIngresoOnAir" id="txtFechaIngresoOnAir" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtCRQ" class="col-md-3 control-label">CRQ:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-drivers-license"></i></span>
                                                        <input type="text" name="txtCRQ" id="txtCRQ" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtWP" class="col-md-3 control-label">WP:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-drivers-license"></i></span>
                                                        <input type="text" name="txtWP" id="txtWP" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!--  fin seccion izquierda form---->

                                        <!--  inicio seccion derecha form---->
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="txtTecnologia" class="col-md-3 control-label">Tecnología:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-tablet"></i></span>
                                                        <input type="text" name="txtTecnologia" id="txtTecnologia" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtTipotrabajo" class="col-md-3 control-label">Tipo de trabajo:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-briefcase"></i></span>
                                                        <input type="text" name="txtTipotrabajo" id="txtTipotrabajo" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtciudad" class="col-md-3 control-label">Ciudad:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-location-arrow"></i></span>
                                                        <input type="text" name="txtciudad" id="txtciudad" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtEnteEjecutor" class="col-md-3 control-label">Ente Ejecutor:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-address-book"></i></span>
                                                        <input type="text" name="txtEnteEjecutor" id="txtEnteEjecutor" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtEstado" class="col-md-3 control-label">Estado:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-thumbs-o-up"></i></span>
                                                        <input type="text" name="txtEstado" id="txtEstado" class="form-control" value="" readonly="false">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtSubestado" class="col-md-3 control-label">Subestado:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-thumbs-o-up"></i></span>
                                                        <input type="text" name="txtSubestado" id="txtSubestado" class="form-control" value="" readonly="false">
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
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><i class="fa fa-fw fa-list"></i> Detalles</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <form class="form-horizontal well">
                                    <div class="panel-body">                                                                   
                                        <fieldset class="col-md-6 control-label">
                                            <div class="form-group">
                                                <label for="txtIntegrador" class="col-md-3 control-label">Integrador:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                                                        <input type="text" name="txtIntegrador" id="txtIntegrador" class="form-control" value="" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cmbTestGestion" class="col-md-3 control-label">Test gestión:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-check-circle"></i></span>
                                                        <select name="cmbTestGestion" id="cmbTestGestion" class="form-control selectpicker" required>
                                                            <option value="SI">SI</option>
                                                            <option value="NO">NO</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cmbSitioLimpio" class="col-md-3 control-label">Sitio limpio:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-check-circle"></i></span>
                                                        <select name="cmbSitioLimpio" id="cmbSitioLimpio" class="form-control selectpicker" required>
                                                            <option value="SI">SI</option>
                                                            <option value="NO">NO</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cmbInstalacionHWSitio" class="col-md-3 control-label">Instalación HW Sitio:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-unlock"></i></span>
                                                        <select name="cmbInstalacionHWSitio" id="cmbInstalacionHWSitio" class="form-control selectpicker" required>
                                                            <option value="CERRADO">CERRADO</option>
                                                            <option value="ABIERTO">ABIERTO</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cmbCambiosConfigSolicitados" class="col-md-3 control-label">Cambios config solicitados:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-unlock"></i></span>
                                                        <select name="cmbCambiosConfigSolicitados" id="cmbCambiosConfigSolicitados" class="form-control selectpicker" required>
                                                            <option value="CERRADO">CERRADO</option>
                                                            <option value="ABIERTO">ABIERTO</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cmbCambiosConfigFinal" class="col-md-3 control-label">Cambios config final:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-unlock"></i></span>
                                                        <select name="cmbCambiosConfigFinal" id="cmbCambiosConfigFinal" class="form-control selectpicker" required>
                                                            <option value="CERRADO">CERRADO</option>
                                                            <option value="ABIERTO">ABIERTO</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtContratista" class="col-md-3 control-label">Contratista:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                                                        <input type="text" class="form-control input-sm" id="txtContratista" name="txtContratista" value="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cmbIntegracionGestionTrafica" class="col-md-3 control-label">integración Gestión y Trafica:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-check-circle"></i></span>
                                                        <select name="cmbIntegracionGestionTrafica" id="cmbIntegracionGestionTrafica" class="form-control selectpicker" required>
                                                            <option value="SI">SI</option>
                                                            <option value="NO">NO</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cmbPuestaServicioSitioNuevoLTE" class="col-md-3 control-label">Puesta Servicio Sitio Nuevo LTE:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-check-circle"></i></span>
                                                        <select name="cmbPuestaServicioSitioNuevoLTE" id="cmbPuestaServicioSitioNuevoLTE" class="form-control selectpicker" required>
                                                            <option value="SI">SI</option>
                                                            <option value="NO">NO</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cmbInstalacionHW4GSitio" class="col-md-3 control-label">instalación HW 4G Sitio:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-check-circle"></i></span>
                                                        <select name="cmbInstalacionHW4GSitio" id="cmbInstalacionHW4GSitio" class="form-control selectpicker" required>
                                                            <option value="SI">SI</option>
                                                            <option value="NO">NO</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!--  fin seccion izquierda form---->

                                        <!--  inicio seccion derecha form---->
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="cmbPrelaunch" class="col-md-3 control-label">Prelaunch:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-check-circle"></i></span>
                                                        <select name="cmbPrelaunch" id="cmbPrelaunch" class="form-control selectpicker" required>
                                                            <option value="SI">SI</option>
                                                            <option value="NO">NO</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtEvidenciaSL" class="col-md-3 control-label">Evidencia SL:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-file-text"></i></span>
                                                        <input type="text" class="form-control input-sm" id="txtEvidenciaSL" name="txtEvidenciaSL" value="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtEvidenciaTG" class="col-md-3 control-label">Evidencia TG:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-file-text"></i></span>
                                                        <input type="text" class="form-control input-sm" id="txtEvidenciaTG" name="txtEvidenciaTG" value="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtIDRFTools" class="col-md-3 control-label">ID RFTools:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-key"></i></span>
                                                        <input type="text" class="form-control input-sm" id="txtIDRFTools" name="txtIDRFTools" value="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtLiderCambio" class="col-md-3 control-label">Líder Cambio:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                                                        <input type="text" class="form-control input-sm" id="txtLiderCambio" name="txtLiderCambio" value="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="txtLiderCuadrilla" class="col-md-3 control-label">Líder Cuadrilla:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                                                        <input type="text" class="form-control input-sm" id="txtLiderCuadrilla" name="txtLiderCuadrilla" value="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cmbImplementacionCampo" class="col-md-3 control-label">Implementación Campo:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-unlock"></i></span>
                                                        <select name="cmbImplementacionCampo" id="cmbImplementacionCampo" class="form-control selectpicker" required>
                                                            <option value="CERRADO">CERRADO</option>
                                                            <option value="ABIERTO">ABIERTO</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cmbDoc" class="col-md-3 control-label">Doc:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-unlock"></i></span>
                                                        <select name="cmbDoc" id="cmbDoc" class="form-control selectpicker" required>
                                                            <option value="CERRADO">CERRADO</option>
                                                            <option value="ABIERTO">ABIERTO</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cmbGestionPower" class="col-md-3 control-label">Gestión Power:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-unlock"></i></span>
                                                        <select name="cmbGestionPower" id="cmbGestionPower" class="form-control selectpicker" required>
                                                            <option value="CERRADO">CERRADO</option>
                                                            <option value="ABIERTO">ABIERTO</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cmbObraCivil" class="col-md-3 control-label">Obra Civil:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-unlock"></i></span>
                                                        <select name="cmbObraCivil" id="cmbObraCivil" class="form-control selectpicker" required>
                                                            <option value="CERRADO">CERRADO</option>
                                                            <option value="ABIERTO">ABIERTO</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cmbOnAIR" class="col-md-3 control-label">On AIR:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-unlock"></i></span>
                                                        <select name="cmbOnAIR" id="cmbOnAIR" class="form-control selectpicker" required>
                                                            <option value="CERRADO">CERRADO</option>
                                                            <option value="ABIERTO">ABIERTO</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cmbNOC" class="col-md-3 control-label">NOC:</label>
                                                <div class="col-md-8 selectContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-fw fa-building"></i></span>
                                                        <select name="cmbNOC" id="cmbNOC" class="form-control selectpicker" required>
                                                            <option value="NOKIA">NOKIA</option>
                                                            <option value="ZTE">ZTE</option>
                                                            <option value="NOKIA_ZTE">NOKIA ZTE</option>
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
                                                    <button type="submit" id="btnGuardar" class="btn btn-primary" onclick = "">Guardar <span class="fa fa-fw fa-floppy-o"></span></button>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="well">
                    <div class="col-xs-12 text-right">
                        <div class="display-block pull-right" style="width: 300px;">
                            <div class="col-xs-4 text-right p-r-0 p-t-5">
                                <label class="">Grupos:</label>
                            </div>
                            <div class="col-xs-8 p-r-0">
                                <select class="form-control" id="cmbGruposTracking">
                                    <option value="">Seleccione</option>
                                </select>
                            </div>                            
                        </div>
                    </div>
                    <div class="display-block">
                        <div class="hour-step active">
                            <div class="body-step">
                                <label>12H</label>
                                <span class="icon-step"><i class="fa fa-fw fa-clock-o"></i></span>
                            </div>
                            <div class="back-progress-step">
                                <span class="progress-step" style="width: 30%;"></span>
                            </div>
                            <div class="footer-step">
                                <label id="timeStep"><i class="fa fa-fw fa-clock-o"></i> -01:35</label>
                            </div>
                        </div>
                        <div class="hour-step">
                            <div class="body-step">
                                <label>24H</label>
                                <span class="icon-step"><i class="fa fa-fw fa-clock-o"></i></span>
                            </div>
                            <div class="back-progress-step">
                                <span class="progress-step"></span>
                            </div>
                            <div class="footer-step">
                                <label id="timeStep"><i class="fa fa-fw fa-clock-o"></i> -00:00</label>
                            </div>
                        </div>
                        <div class="hour-step">
                            <div class="body-step">
                                <label>36H</label>
                                <span class="icon-step"><i class="fa fa-fw fa-clock-o"></i></span>                            
                            </div>
                            <div class="back-progress-step">
                                <span class="progress-step"></span>
                            </div>
                            <div class="footer-step">
                                <label id="timeStep"><i class="fa fa-fw fa-clock-o"></i> -00:00</label>
                            </div>
                        </div>                    
                    </div>
                    <div class="well white p-t-5 p-b-5 p-r-5 p-l-5">
                        <div class="well m-b-0">
                            <table id="tblTrackingDetails" class="table table-hover table-condensed table-striped"></table>
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
