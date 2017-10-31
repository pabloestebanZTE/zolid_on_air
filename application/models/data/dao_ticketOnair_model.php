<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

    class dao_ticketOnair_model extends CI_Model{

        public function __construct(){
          $this->load->model('dto/TicketOnAirModel');
        }

        public function getAll(){
          try {
            $ticketOnAir = new TicketOnAirModel();
            $datos = $ticketOnAir->get();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

        public function findByIdOnAir($request){
          try {
            $ticketOnAir = new TicketOnAirModel();
            $datos = $ticketOnAir->where("k_id_onair","=",$request)
                          ->first();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

        public function findByIdPrecheck($id){
          try {
            $ticketOnAir = new TicketOnAirModel();
            $datos = $ticketOnAir->where("k_id_precheck","=",$id)
                          ->first();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }
    }
?>
