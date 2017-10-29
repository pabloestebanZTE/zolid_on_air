<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class User extends CI_Controller {

      function __construct() {
        parent::__construct();
        $this->load->model('data/dao_user_model');

      }

      public function loginUser(){
         $dato = new dao_user_model;
         $res = $dato->findByUsername($this->request);
         print_r($res);
          if($res->data != ""){
            if($res->data->n_password == $this->request->password){
               if($res->data->n_role_user == "Coordinador"){

               }
               if($res->data->n_role_user == "Documentador"){

               }
               if($res->data->n_role_user == "Ingeniero"){

               }
               $this->login($res);
            }else {
              $answer['error'] = "error";
              $this->load->view('login', $answer);
            }
         }else {
           $answer['error'] = "error";
           $this->load->view('login', $answer);
         }
      }


      //preferiblemente dejar el código en el dao_user_model...
      public function login($user){
        $request = $this->request;
        if (Auth::attempt([
                  "n_mail_user" => $request->username,
                  "n_password" => $request->password,
                  "OR" => [
                      "n_username_user" => $request->username
                  ]
              ])) {
          $answer['user'] = $user->data;
          $this->load->view('principal', $answer);
          //Redireccionar, o cargar vista de acceso válido...
          echo "LOGUEADO CORRECTAMENTE<br/>";
      } else {
        //Redireccionar o cargar vista de acceso inválido...
          echo "NO SE PUDO LOGEAR<br/>";
      }
      }


      public function logout(){
        Auth::logout();
        $this->comprobarSesion();
      }

      public function comprobarSesion(){
        //Comprobar si existe una sesión...
        if(Auth::check()){
          echo "Hay sesión<br/><pre>";
          var_dump(Auth::user());
          echo "</pre>";
        }else{
          echo "No hay sesión";
        }
      }

      public function principalView(){
        $this->load->view('principal');
      }
  }

?>
