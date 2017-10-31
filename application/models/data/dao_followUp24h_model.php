<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

    class dao_followUp24h_model extends CI_Model{

        public function __construct(){
          $this->load->model('dto/FollowUp24hModel');
        }

        public function getAll(){
          try {
            $follow24 = new FollowUp24hModel();
            $datos = $follow24->get();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

        public function getfollow24ById($idUser){
          try {
            $follow24 = new FollowUp24hModel();
            $datos = $follow24->where("k_id_user","=",$idUser)
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
