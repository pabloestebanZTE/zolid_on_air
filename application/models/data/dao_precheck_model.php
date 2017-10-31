<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

    class dao_precheck_model extends CI_Model{

        public function __construct(){
          $this->load->model('dto/PrecheckModel');
        }

        public function getAll(){
          try {
            $precheck = new PrecheckModel();
            $datos = $precheck->get();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

        public function getUserByprecheck($idUser){
          try {
            $precheck = new PrecheckModel();
            $datos = $precheck->where("k_id_user","=",$idUser)
                          ->first();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;

          } catch (ZolidException $ex) {
            return $ex;
          }
        }

        public function getPrecheckById($idUser){
          try {
            $precheck = new PrecheckModel();
            $datos = $precheck->where("k_id_user","=",$idUser)
                          ->get();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

    }
?>
