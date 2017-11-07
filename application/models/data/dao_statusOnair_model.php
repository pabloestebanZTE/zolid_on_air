<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

    class dao_statusOnair_model extends CI_Model{

        public function __construct(){
          $this->load->model('dto/StatusOnAirModel');
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
            $response->data->k_id_status = $this->findStatusById($response->data->k_id_status)->data;//DB::status
            $response->data->k_id_substatus = $this->findSubstatusById($response->data->k_id_substatus)->data;//substatus
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

        public function getAllStatus(){
          try {
            $datos = DB::table("status")->get();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

        public function getAllSubstatus(){
          try {
            $datos = DB::table("substatus")->get();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

    }
?>
