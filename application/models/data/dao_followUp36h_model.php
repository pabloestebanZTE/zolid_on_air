<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

    class dao_followUp36h_model extends CI_Model{

        public function __construct(){
          $this->load->model('dto/FollowUp36hModel');
        }

        public function getAll(){
          try {
            $follow36 = new FollowUp36hModel();
            $datos = $follow36->get();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

        public function getfollow36ById($idUser){
          try {
            $follow36 = new FollowUp36hModel();
            $datos = $follow36->where("k_id_user","=",$idUser)
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
