<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

    class dao_onAir12h_model1 extends CI_Model{

      public function __construct(){
        $this->load->model('dto/OnAir12hModel');
      }

      public function getAll(){
        try {
          $onair12 = new OnAir12hModel();
          $datos = $onair12->get();
          $response = new Response(EMessages::SUCCESS);
          $response->setData($datos);
          return $response;
        } catch (ZolidException $ex) {
          return $ex;
        }
      }

      public function getUserByOnair12($id){
        try {
          $onair12 = new OnAir12hModel();
          $datos = $onair12->where("k_id_user","=",$id)
                        ->first();
          $response = new Response(EMessages::SUCCESS);
          $response->setData($datos);
          return $response;

        } catch (ZolidException $ex) {
          return $ex;
        }

        public function getOnair12ById($id){
          try {
            $onair12 = new OnAir12hModel();
            $datos = $onair12->where("k_id_follow_up_12h","=",$id)
                          ->get();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }


      }

  }
?>
