<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('data/dao_user_model');
    }

    public function index() {
      $dao = new dao_user_model();
      $res = $dao->getCustom4($this->request);
      $this->json($res);
    }

}
