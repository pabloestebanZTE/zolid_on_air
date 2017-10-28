<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class User extends CI_Controller {

      function __construct() {
        parent::__construct();
      }

      public function loginUser(){
        echo "aqui se hace la validacion del login";
      }

      public function principalView(){
        $this->load->view('principal');
      }
  }

?>
