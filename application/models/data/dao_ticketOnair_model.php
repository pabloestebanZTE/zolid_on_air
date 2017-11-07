<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

    class dao_ticketOnair_model extends CI_Model{

        public function __construct(){
          $this->load->model('dto/TicketOnAirModel');
        }

        public function insertTicket($request){
          try {
            $ticket = new TicketOnAirModel();
            $datos = $ticket->insert($request->all());
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
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

        public function findByIdOnAir($id){
          try {
            $ticketOnAir = new TicketOnAirModel();
            $datos = $ticketOnAir->where("k_id_onair","=",$id)
                          ->first();
            //Evaluamos si se encontró algún registro.
            if($datos){
                $datos->k_id_onair = DB::table("work")->where("k_id_work")->get();
            }
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

        public function findByIdSingleOnAir($id){
          try {
            $ticketOnAir = new TicketOnAirModel();
            $datos = $ticketOnAir->where("k_id_onair","=",$id)
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

        public function updateTicket($request){
          try {
            $ticketOnAir = new TicketOnAirModel();
            $datos = $ticketOnAir->where("k_id_onair","=",$request->k_id_ticket)
                          ->update($request->all());
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }
    }
?>
