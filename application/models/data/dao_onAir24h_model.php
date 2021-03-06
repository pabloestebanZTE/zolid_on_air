<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

    class Dao_onAir24h_model extends CI_Model{

      public function __construct(){
        $this->load->model('dto/OnAir24hModel');
      }

      public function getAll(){
        try {
          $onair24 = new OnAir24hModel();
          $datos = $onair24->get();
          $response = new Response(EMessages::SUCCESS);
          $response->setData($datos);
          return $response;
        } catch (ZolidException $ex) {
          return $ex;
        }
      }

      public function getUserByOnair24($idUser){
        try {
          $onair24 = new OnAir24hModel();
          $datos = $onair24->where("k_id_user","=",$idUser)
                        ->first();
          $response = new Response(EMessages::SUCCESS);
          $response->setData($datos);
          return $response;

        } catch (ZolidException $ex) {
          return $ex;
        }
      }

      public function getOnair24ByFollow($id){
        try {
          $onair24 = new OnAir24hModel();
          $datos = $onair24->where("k_id_follow_up_24h","=",$id)
                        ->first();
          $response = new Response(EMessages::SUCCESS);
          $response->setData($datos);
          return $response;
        } catch (ZolidException $ex) {
          return $ex;
        }
      }

      public function getOnair24ByIdOnair($id){
        try {
          $onair24 = new OnAir24hModel();
          $datos = $onair24->where("k_id_onair","=",$id)
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
