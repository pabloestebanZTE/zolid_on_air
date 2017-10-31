<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('parts/generic/head'); ?>
    <body data-base="<?= URL::base()?>">
        <?php $this->load->view('parts/generic/header'); ?>
        <div class="container autoheight">
            <div class='tab-content' id='tab3'><brt><br>
                <div class="container">
                    <form class="well form-horizontal" action=" " method="post"  id="assignService" name="assignServie">
                        <legend >Asignar Actividad</legend>
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
                                        <select name="cbmIngeniero" id="cbmIngeniero" class="form-control selectpicker" required>
                                            <option value="" >Seleccione el ingeniero</option>
                                            <?php
//                if(isset($services)){
//                  for($i =0; $i < count($services); $i++){
//                    echo "<option value='".$services[$i]->getId()."'>".$services[$i]->getType()."</option>";
//                  }
//                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!--  fin seccion izquierda form---->

                        <!--  inicio seccion derecha form---->
                        <fieldset >
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
        <!--footer Section -->
        <div class="for-full-back" id="footer">
            Zolid By ZTE Colombia | All Right Reserved
        </div>
        <?php $this->load->view('parts/generic/scripts'); ?>
        <!-- CUSTOM SCRIPT   -->
        <script src="<?= URL::to('assets/js/modules/principal.js') ?>" type="text/javascript"></script>
</body>
</html>
