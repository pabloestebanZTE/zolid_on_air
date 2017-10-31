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
        $this->load->model('data/dao_followUp12h_model');

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
          //
          $res->data[$j]->k_id_station = $station->findById($res->data[$j]->k_id_station)->data;//Station
          //
          $res->data[$j]->k_id_band = $band->findById($res->data[$j]->k_id_band)->data;//band
          //
          $res->data[$j]->k_id_work = $work->findById($res->data[$j]->k_id_work)->data;//work
          //
          $res->data[$j]->k_id_technology = $technology->findById($res->data[$j]->k_id_technology)->data;//technology
       }
       $this->json($res);
    }

    public function ticketUser(){
        $precheck = new dao_precheck_model();
        $ticket = new dao_ticketOnair_model();
        $ticketsOnAir = new dao_ticketOnAir_model();
        $station = new dao_station_model();
        $band = new dao_band_model();
        $work = new dao_work_model();
        $technology = new dao_technology_model();
        $statusOnair = new dao_statusOnair_model();

        header('Content-Type: text/plain');
        $userId = 1;
        $precheckId = $precheck->getPrecheckById($userId)->data;

        for ($j=0; $j <count($precheckId) ; $j++) {
          $res = $ticket->findByIdPrecheck($precheckId[$j]->k_id_precheck);

          $res->data->k_id_band = $band->findById($res->data->k_id_band)->data;//band
          $res->data->k_id_status_onair = $statusOnair->findById($res->data->k_id_status_onair)->data;//Status onair
          $res->data->k_id_station = $station->findById($res->data->k_id_station)->data;//Station
          $res->data->k_id_work = $work->findById($res->data->k_id_work)->data;//work
          $res->data->k_id_technology = $technology->findById($res->data->k_id_technology)->data;//technology

          $respuesta[$j]=$res->data;

        }
        //print_r($respuesta);

        $onair12 = new dao_followUp12h_model();
        $res2 = $onair12->getfollow12ById($userId)->data;
        print_r($res2[0]);
        
        $ticket12 =


    }
}
