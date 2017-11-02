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
        $this->load->model('data/dao_followUp24h_model');
        $this->load->model('data/dao_followUp36h_model');
        $this->load->model('data/dao_onAir12h_model');
        $this->load->model('data/dao_onAir24h_model');
        $this->load->model('data/dao_onAir36h_model');

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
       $this->json($res);
    }

    public function ticketUser($userId){
        $precheck = new dao_precheck_model();
        $ticket = new dao_ticketOnair_model();
        $ticketsOnAir = new dao_ticketOnAir_model();
        $station = new dao_station_model();
        $band = new dao_band_model();
        $work = new dao_work_model();
        $technology = new dao_technology_model();
        $statusOnair = new dao_statusOnair_model();

        $precheckId = $precheck->getPrecheckById($userId)->data;

        for ($j=0; $j <count($precheckId) ; $j++) {
          $res = $ticket->findByIdPrecheck($precheckId[$j]->k_id_precheck);
          // $res->data->k_id_band = $band->findById($res->data->k_id_band)->data;//band
          // $res->data->k_id_status_onair = $statusOnair->findById($res->data->k_id_status_onair)->data;//Status onair
          // $res->data->k_id_station = $station->findById($res->data->k_id_station)->data;//Station
          // $res->data->k_id_work = $work->findById($res->data->k_id_work)->data;//work
          // $res->data->k_id_technology = $technology->findById($res->data->k_id_technology)->data;//technology
          $respuesta[$j]=$res->data;
        }
        // print_r($respuesta);//ticket precheck
        $follow12 = new dao_followUp12h_model();
        $onair12 = new dao_onAir12h_model();
        $ticket12 = new dao_ticketOnAir_model();
        $res2 = $follow12->getfollow12ById($userId)->data;

        for ($i=0; $i <count($res2) ; $i++) {
          $res3[$i] = $onair12->getOnair12ByFollow($res2[$i]->k_id_follow_up_12h)->data;
          $res = $ticket12->findByIdOnAir($res3[$i]->k_id_onair);
          $respuesta[$j+$i] = $res->data;
        }
        // print_r($respuesta);//ticket prechek+12h
        $follow24 = new dao_followUp24h_model();
        $onair24 = new dao_onAir24h_model();
        $ticket24 = new dao_ticketOnAir_model();
        $res24 = $follow24->getfollow24ById($userId)->data;

        for ($f=0; $f <count($res24) ; $f++) {
         $resp[$f] = $onair24->getOnair24ByFollow($res24[$f]->k_id_follow_up_24h)->data;
         $respuesta[$j+$i+$f] = $res->data;
        }
        // print_r($respuesta);//ticket precheck+12+24
        $follow36 = new dao_followUp36h_model();
        $onair36 = new dao_onAir36h_model();
        $ticket36 = new dao_ticketOnAir_model();
        $res36 = $follow36->getfollow36ById($userId)->data;

<<<<<<< HEAD
       for ($g=0; $g <count($res36) ; $g++) {

          $respu[$g] = $onair36->getOnair36ByFollow($res36[$g]->k_id_follow_up_36h)->data;
          $respuesta[$j+$i+$f+$g] = $res->data;
       }
       //  print_r($respuesta);//ticket precheck+12+24+36
       for ($r=0; $r < count($respuesta) ; $r++) {
         $flag[$r] = $respuesta[$r]->k_id_onair;
       }
       $unique = array_unique($flag);
       $final = array_values($unique);

       $ticketUnic = new dao_ticketOnAir_model();

       for ($t=0; $t < count($final) ; $t++) {
         $ticketUser[$t] = $ticketUnic->findByIdOnAir($final[$t])->data;

         $ticketUser[$t]->k_id_band = $band->findById($ticketUser[$t]->k_id_band)->data;//band
         $ticketUser[$t]->k_id_status_onair = $statusOnair->findById($ticketUser[$t]->k_id_status_onair)->data;//Status onair
         $ticketUser[$t]->k_id_station = $station->findById($ticketUser[$t]->k_id_station)->data;//Station
         $ticketUser[$t]->k_id_work = $work->findById($ticketUser[$t]->k_id_work)->data;//work
         $ticketUser[$t]->k_id_technology = $technology->findById($ticketUser[$t]->k_id_technology)->data;//technology
       }
       $response = new Response(EMessages::QUERY);
       $response->setData($ticketUser);
       $this->json($response);
      // header('Content-Type: text/plain');
    }




=======
        $onair12 = new dao_followUp12h_model();
        $res2 = $onair12->getfollow12ById($userId)->data;
        print_r($res2[0]);

//        $ticket12 =


      //  $ticket12 =
    }

    // public function createTicket(){
    //   $station = new dao_station_model();
    //   $band = new dao_band_model();
    //   $work = new dao_work_model();
    //   $technology = new dao_technology_model();
    //
    //   $res['stations'] = $station->getAll();
    //   $res['bands'] = $band->getAll();
    //   $res['works'] = $work->getAll();
    //   $res['technologies'] = $technology->getAll();
    //
    //   $answer['respuesta'] = json_encode($res);
    //   $this->load->view('createTicketOnair', $answer);
    // }
>>>>>>> 60c56db9842d4d4243c88a234f1f46ecb1613fc2
}
