<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('parts/generic/head'); ?>
    <body data-base="<?= URL::base() ?>">
        <?php $this->load->view('parts/generic/header'); ?>
        <div class="container autoheight p-t-20">

            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class='tab-content' id='tab3'>
                                    <div class="container">
                                        <form class="well form-horizontal" action=" " method="post"  id="assignService" name="assignServie">
                                            <fieldset class="col-md-6 control-label">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Estacion</label>
                                                    <div class="col-md-8 selectContainer">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-fw fa-street-view"></i></span>
                                                            <input type='text' name="txtEstacion" id="txtEstacion" class="form-control" value='' readonly="false">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Banda</label>
                                                    <div class="col-md-8 selectContainer">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-fw fa-signal"></i></span>
                                                            <input type='text' name="txtBanda" id="txtBanda" class="form-control" value='' readonly="false">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Regional</label>
                                                    <div class="col-md-8 selectContainer">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-fw fa-globe"></i></span>
                                                            <input type='text' name="txtRegional" id="txtRegional" class="form-control" value='' readonly="false">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Ingeniero</label>
                                                    <div class="col-md-8 selectContainer">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                                                            <input type='text' name="cbmIngeniero" id="cbmIngeniero" class="form-control" value='' readonly="false">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <!--  fin seccion izquierda form---->

                                            <!--  inicio seccion derecha form---->
                                            <fieldset>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Tecnologia</label>
                                                    <div class="col-md-8 selectContainer">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-fw fa-tablet"></i></span>
                                                            <input type='text' name="txtTecnologia" id="txtTecnologia" class="form-control" value='' readonly="false">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Tipo de trabajo</label>
                                                    <div class="col-md-8 selectContainer">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-fw fa-briefcase"></i></span>
                                                            <input type='text' name="txtTipotrabajo" id="txtTipotrabajo" class="form-control" value='' readonly="false">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Ciudad</label>
                                                    <div class="col-md-8 selectContainer">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-fw fa-location-arrow"></i></span>
                                                            <input type='text' name="txtTipotrabajo" id="txtTipotrabajo" class="form-control" value='' readonly="false">
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
                                                        <button type="submit" id="btnAsignar" class="btn btn-primary" onclick = "this.form.action = 'http://localhost/Datafill_OT/index.php/SpecificService/saveServiceS'">Asignar <span class="fa fa-fw fa-floppy-o"></span></button>
                                                    </div>
                                                </div>
                                            </center>
                                        </form>
                                    </div>
                            </div>
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
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
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
        <script src="<?= URL::to('assets/js/modules/principal.js') ?>" type="text/javascript"></script>
    </body>
</html>
