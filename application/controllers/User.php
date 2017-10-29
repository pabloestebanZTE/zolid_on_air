<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class User extends CI_Controller {

      function __construct() {
        parent::__construct();
        $this->load->model('data/dao_user_model');

      }

      public function loginUser(){
        echo "<br><br><br><br><br>";
        echo "o_ougiugiulih";
        // $dato = new dao_user_model;
        // $res = $dato->findByUsername($this->request);
        //$this->json($res);

        // $res = $this->dao_user_model->findByUsername($this->request);
        // print_r($res);
      }


      //preferiblemente dejar el código en el dao_user_model...
      public function login(){
        $request = $this->request;        
        if (Auth::attempt([
                  "n_mail_user" => $request->username,
                  "n_password" => $request->password,
                  "OR" => [
                      "n_username_user" => $request->username
                  ]
              ])) {
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
