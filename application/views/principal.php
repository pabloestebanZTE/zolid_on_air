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
        <link rel="stylesheet" href="<?= URL::to('assets/css/font-awesome.min.css') ?>"/>
        <!--   CSS ESTILOS PRINCIPAL    -->
        <link rel="stylesheet" href="<?= URL::to('assets/css/stylePrincipal.css') ?>" />
        <link rel='stylesheet' type='text/css'  href='http://fonts.googleapis.com/css?family=Open+Sans'/>
        <!-- CSS BOOTSTRAP-TABLE-->
        <link rel="stylesheet" href="<?= URL::to('assets/css/bootstrap-table.css') ?>">
    </head>
    <body>
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
            <div class="col col-md-12">
                <br>
                <button type="button" class="btn btn-primary">hola</button>

                <table id="tablaPrincipal" class="table table-hover table-condensed table-striped" data-toggle="table" data-search="true" data-sortable="true" data-pagination="true">
                    <thead>
                        <tr>
                            <th>Sitio</th>
                            <th>Tipo de trabajo</th>
                            <th>Estado</th>
                            <th>Subestado</th>
                            <th>Tiempo</th>
                            <th>Tecnologia</th>
                            <th>Banda</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
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
</body>
</html>
