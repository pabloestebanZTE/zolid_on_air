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
        <link rel='stylesheet' type='text/css'  href='http://fonts.googleapis.com/css?family=Open+Sans'/>
        <!-- CSS BOOTSTRAP-TABLE-->
        <link rel="stylesheet" href="<?= URL::to('assets/css/bootstrap-table.css') ?>">
        <link rel="stylesheet" href="<?= URL::to('assets/css/helper-class.css') ?>">
        <link rel="stylesheet" href="<?= URL::to('assets/css/stylePrincipal.css') ?>" />
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
            <div class="row">
                <div class="col col-md-12 p-t-20">
                    <button type="button" class="btn btn-primary m-t-50">Asignar</button>
                </div>
                <div class="col col-md-12">
                    <input type="hidden" value="<?= Auth::getRole() ?>" id="rol">
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
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo1</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                                <td>
                                    <span class="fa fa-fw fa-ambulance">Detalle</span><br>
                                    <span class="fa fa-fw fa-ambulance">Documentacion Ticket</span><br>
                                    <span class="fa fa-fw fa-ambulance">Asignar</span><br>
                                </td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                            <tr>
                                <td>Sitio</td>
                                <td>Tipo de trabajo</td>
                                <td>Estado</td>
                                <td>Subestado</td>
                                <td>Tiempo</td>
                                <td>Tecnologia</td>
                                <td>Banda</td>
                            </tr>
                        </tbody>
                    </table>
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
<script src="<?= URL::to('assets/js/modules/principal.js') ?>" type="text/javascript"></script>
</body>
</html>
