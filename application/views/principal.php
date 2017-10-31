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
        <link rel="stylesheet" href="<?= URL::to('assets/css/helper-class.css') ?>">
        <link rel="stylesheet" href="<?= URL::to('assets/css/stylePrincipal.css?v=1.0') ?>" />
        <link rel="stylesheet" href="<?= URL::to('assets/plugins/sweetalert-master/dist/sweetalert.css') ?>" />
    </head>
    <body data-base="<?= URL::base()?>">
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
            <?php
//            if (Auth::isCoordinador()) {
//                $this->load->view('parts/principal/coordinador');
//            }
//            if (Auth::isDocumentador()) {
//                $this->load->view('parts/principal/documentador');
//            }
//            if (Auth::isIngeniero()) {
//                $this->load->view('parts/principal/ingeniero');
//            }
            $this->load->view('parts/principal/coordinador');
            ?>
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
<script src="<?= URL::to('assets/js/modules/principal.js?v=1.1') ?>" type="text/javascript"></script>
<script scr="<?= URL::to("assets/plugins/sweetalert-master/dist/sweetalert.min.js") ?>" ></script>
</body>
</html>
