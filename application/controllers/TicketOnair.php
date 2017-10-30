<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TicketOnair extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('data/dao_ticketOnAir_model');
        $this->load->model('data/dao_station_model');
        $this->load->model('data/dao_band_model');
        $this->load->model('data/dao_work_model');
        $this->load->model('data/dao_technology_model');
        $this->load->model('data/dao_statusOnair_model');
        $this->load->model('data/dao_precheck_model');

    }

    public function listTicketOnair(){
      $ticketsOnAir = new dao_ticketOnAir_model();
       $station = new dao_station_model();
       $band = new dao_band_model();
       $work = new dao_work_model();
       $technology = new dao_technology_model();
       $statusOnair = new dao_statusOnair_model();

       $res = $ticketsOnAir->getAll($this->request);

       for ($j=0; $j <count($res->data) ; $j++) {
          $res->data[$j]->k_id_status_onair = $statusOnair->findById($res->data[$j]->k_id_status_onair)->data;//Status onair

          $res->data[$j]->k_id_station = $station->findById($res->data[$j]->k_id_station)->data;//Station

          $res->data[$j]->k_id_band = $band->findById($res->data[$j]->k_id_band)->data;//band

          $res->data[$j]->k_id_work = $work->findById($res->data[$j]->k_id_work)->data;//work

          $res->data[$j]->k_id_technology = $technology->findById($res->data[$j]->k_id_technology)->data;//technology
       }
       header('Content-Type: text/plain');
      //  $res->data
      //  $this->json($res);
        // print_r($res);
    }

    public function ticketUser(){
        $precheck = new dao_precheck_model();
        $userId = 1;
        $ticket = $precheck->getPrecheckById($userId);
        print_r($ticket);


    }


}
