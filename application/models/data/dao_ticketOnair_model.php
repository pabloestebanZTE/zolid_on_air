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
            $datos = $user->where("k_id_user","=",$request->idOnAir)
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
