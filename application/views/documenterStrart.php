<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Zolid ZTE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--   ICONO PAGINA    -->
        <link rel="icon" href="http://cellaron.com/media/wysiwyg/zte-mwc-2015-8-l-124x124.png">
        <!--   BOOTSTRAP    -->
        <link rel="stylesheet" href="<?= URL::to('assets/css/bootstrap.css') ?>"/>->
        <link rel="stylesheet" href="<?= URL::to('assets/plugins/font-awesome/css/font-awesome.min.css') ?>"/>
        <!--   CSS ESTILOS PRINCIPAL    -->
        <link rel='stylesheet' type='text/css'  href='http://fonts.googleapis.com/css?family=Open+Sans'/>
        <!-- CSS BOOTSTRAP-TABLE-->
        <link rel="stylesheet" href="<?= URL::to('assets/css/bootstrap-table.css') ?>">
        <link rel="stylesheet" href="<?= URL::to('assets/css/helper-class.css') ?>">
        <link rel="stylesheet" href="<?= URL::to('assets/css/stylePrincipal.css') ?>" />
    </head>
    <body data-base="<?php URL::base() ?>">
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
        <div class="container">

            <!--asignacion-->
            <div class='tab-content' id='tab1'><br><br><br><br>

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
                                <label class="col-md-3 control-label">Estacion</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-street-view"></i></span>
                                        <input type='text' name="idOrden" id="idOrden" class="form-control" value='' placeholder='Digite el nombre de la estacion' required>
                                    </div>
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Banda</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-signal"></i></span>
                                        <select name="tipo" id="tipo" class="form-control selectpicker" required>
                                            <option value="" >Seleccione la banda</option>
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

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Regional</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-globe"></i></span>
                                        <select name="tipo" id="tipo" class="form-control selectpicker" required>
                                            <option value="" >Seleccione la regional</option>
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
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tecnologia</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-tablet"></i></span>
                                        <select name="tipo" id="tipo" class="form-control selectpicker" required>
                                            <option value="" >Seleccione la tecnologia</option>
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

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tipo de trabajo</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-briefcase"></i></span>
                                        <select name="tipo" id="tipo" class="form-control selectpicker" required>
                                            <option value="" >Seleccione el tipo de trabajo</option>
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

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Ciudad</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-location-arrow"></i></span>
                                        <select name="tipo" id="tipo" class="form-control selectpicker" required>
                                            <option value="" >Seleccione la ciudad</option>
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
        <!--End footer Section -->
        <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
        <!-- CORE JQUERY  -->
        <script src="<?= URL::to('assets/plugins/jquery-1.10.2.js') ?>" /></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="<?= URL::to('assets/plugins/bootstrap.js') ?>" /></script>
<!-- PARALLAX SCRIPT   -->
<script src="<?= URL::to('assets/plugins/4jquery.parallax-1.1.3.js') ?>" /></script>
<!-- CUSTOM SCRIPT   -->
<script src="<?= URL::to('assets/js/custom.js') ?>" /></script>
<!--BOOTSTRAP-TABLE SCRIPT-->
<script src="<?= URL::to('assets/plugins/bootstrap-table.js') ?>"></script>
<script src="<?= URL::to("assets/js/utils/app.global.js") ?>" type="text/javascript"></script>
<script src="<?= URL::to("assets/js/utils/app.dom.js") ?>" type="text/javascript"></script>
<script src="<?= URL::to('assets/js/modules/principal.js') ?>" type="text/javascript"></script>
</body>
</html>
