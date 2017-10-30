<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

    class dao_station_model extends CI_Model{

        public function __construct(){
           $this->load->model('dto/StationModel');
        }
        public function getAll(){
          try {
            $station = new StationModel();
            $datos = $station->get();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

        public function findById($id){
          try {
            $station = new StationModel();
            $datos = $station->where("k_id_station","=",$id)
                          ->first();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

        public function findCityById($id){
          try {
            $datos = DB::table("city")->where("k_id_city","=", $id)
                                  ->first();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

        public function findRegionalById($id){
          try {
            echo "holalalalala";
            $datos = DB::table("regional")->where("k_id_regional","=", $id)
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
