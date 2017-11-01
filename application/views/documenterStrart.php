<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('parts/generic/head'); ?>
    <body data-base="<?php URL::base() ?>">
        <?php $this->load->view('parts/generic/header'); ?>
        <div class="container">

            <!--asignacion-->
            <div class='tab-content' id='tab1'><br><br>

                <div class='container'>
                    <form class= 'well form-horizontal' action='' method='post'  id='assignService' name='assignServie' enctype= 'multipart/form-data'>
                        <fieldset>
                            <legend>Asignacion</legend>
                            <!--Text input-->
                            <div class= 'form-group'>
                                <label class= 'col-md-4 control-label'>Elegir Archivo</label>
                                <div class= 'col-md-6 inputGroupContainer'>
                                    <div class= 'input-group'>
                                        <span class= 'input-group-addon'><i class= 'fa fa-fw fa-envelope-open'></i></span>
                                        <input  name= 'idarchivo' class= 'form-control'  type= 'file'>
                                    </div>
                                </div>
                            </div>
                            <center>
                                <button type= 'submit' class= 'btn btn-primary' onclick = "this.form.action = 'http://localhost/zolid_on_air/index.php/User/loginUser'">Verificar  <span class= 'fa fa-fw fa-check'></span></button>
                            </center>
                        </fieldset>
                    </form>
                </div>
            </div>

            <div class='tab-content' id='tab3'>
                <div class="container">
                    <form class="well form-horizontal" action=" " method="post"  id="assignService" name="assignServie">
                        <legend >Asignar Actividad</legend>
                        <fieldset class="col-md-6 control-label">
                            <!-- Input Text -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Estacion:</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-street-view"></i></span>
                                        <input type='text' name="estacion" id="estacion" class="form-control" value='' placeholder='Digite el nombre de la estacion' required>
                                    </div>
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Banda:</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-signal"></i></span>
                                        <select name="banda" id="banda" class="form-control selectpicker" required>
                                            <option value="" >Seleccione la banda</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Regional:</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-globe"></i></span>
                                        <select name="regional" id="regional" class="form-control selectpicker" required>
                                            <option value="" >Seleccione la regional</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!--  fin seccion izquierda form---->

                        <!--  inicio seccion derecha form---->
                        <fieldset >
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tecnologia:</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-tablet"></i></span>
                                        <select name="tecnologia" id="tecnologia" class="form-control selectpicker" required>
                                            <option value="" >Seleccione la tecnologia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tipo de trabajo:</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-briefcase"></i></span>
                                        <select name="tipotrabajo" id="tipotrabajo" class="form-control selectpicker" required>
                                            <option value="" >Seleccione el tipo de trabajo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Ciudad:</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-location-arrow"></i></span>
                                        <select name="ciudad" id="ciudad" class="form-control selectpicker" required>
                                            <option value="" >Seleccione la ciudad</option>
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
                                    <button type="submit" class="btn btn-primary" onclick = "this.form.action = 'http://localhost/Datafill_OT/index.php/SpecificService/saveServiceS'">Guardar <span class="fa fa-fw fa-floppy-o"></span></button>
                                </div>
                            </div>
                        </center>
                    </form>
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
