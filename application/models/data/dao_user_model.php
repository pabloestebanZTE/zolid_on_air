<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

    class dao_user_model extends CI_Model{

        protected $session;

        public function __construct(){
           $this->load->model('dto/UserModel');

        }

        public function getAll(){
          try {
            $user = new User();
            $datos = $user->get();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }

        }

        public function findByUsername($request){
          try {
            $user = new UserModel();
            $datos = $user->where("n_username_user","=",$request->username)
                          ->first();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          } catch (ZolidException $ex) {
            return $ex;
          }
        }

        public function findByPassword($request){
          try {
            $user = new User();
            $datos = $user->where("n_password","=",$request->password)
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
