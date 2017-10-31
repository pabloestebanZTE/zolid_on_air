<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('parts/generic/head'); ?>
    <body data-base="<?= URL::base() ?>">
        <?php $this->load->view('parts/generic/header'); ?>
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
            $this->load->view('parts/principal/documentador');
            ?>
        </div>
        <!--footer Section -->
        <div class="for-full-back" id="footer">
            Zolid By ZTE Colombia | All Right Reserved
        </div>
        <?php $this->load->view('parts/generic/scripts'); ?>
        <!-- CUSTOM SCRIPT   -->
        <script src="<?= URL::to('assets/js/modules/principal.js?v=1.1') ?>" type="text/javascript"></script>
        <script scr="<?= URL::to("assets/plugins/sweetalert-master/dist/sweetalert.min.js") ?>" ></script>
    </body>
</html>
