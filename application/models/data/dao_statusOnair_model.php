<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

    class dao_statusOnair_model extends CI_Model{

        public function __construct(){
          $this->load->model('dto/StatusOnairModel');
        }

        public function getAll(){
          try {
            $statusOnair = new StatusOnairModel();
            $datos = $statusOnair->get();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

        public function findById($id){
          try {
            $statusOnair = new StatusOnairModel();
            $datos = $statusOnair->where("k_id_status_onair","=",$id)
                          ->first();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

        public function findStatusById($id){//prueba con DB
          try {
            $datos = DB::table("status")->where("k_id_status","=", $id)
                                  ->first();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

        public function findSubstatusById($id){//prueba con DB
          try {
            $datos = DB::table("substatus")->where("k_id_substatus","=", $id)
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
