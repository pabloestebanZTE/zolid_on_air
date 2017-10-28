<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('data/dao_user_model');
    }

    public function index() {
      $dato = new dao_user_model();
      $res = $dato->getAll($request);
      $this->json($res);
    }

}
