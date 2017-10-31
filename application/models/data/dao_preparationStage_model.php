<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

    class dao_preparationStage_model extends CI_Model{

        public function __construct(){
          $this->load->model('dto/PreparationStageModel');
        }

        public function findByIdPreparation($id){
          try {
            $preparation = new PreparationStageModel();
            $datos = $preparation->where("k_id_preparation","=",$id)
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