<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class User extends CI_Controller {

      function __construct() {
        parent::__construct();
        $this->load->model('data/dao_user_model');

      }

      public function loginUser(){
        echo "<br><br><br><br><br>";
        echo "o_ougiugiulih";
        // $dato = new dao_user_model;
        // $res = $dato->findByUsername($this->request);
        //$this->json($res);

        // $res = $this->dao_user_model->findByUsername($this->request);
        // print_r($res);
      }

      public function principalView(){
        $this->load->view('principal');
      }
  }

?>
