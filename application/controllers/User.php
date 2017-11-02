<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class User extends CI_Controller {

      function __construct() {
        parent::__construct();
        $this->load->model('data/dao_user_model');

      }

      private function validUser($request){
        return Auth::attempt([
                  "n_mail_user" => $request->username,
                  "n_password" => $request->password,
                  "OR" => [
                      "n_username_user" => $request->username
                  ]
                ]);
      }

      public function loginUser(){
        $res = $this->validUser($this->request);
        //Comprobamos si el Auth ha encontrado válida las credenciales consultadas...
        if($res){
             //Se actualiza la forma de validar los roles...
             //Podemos acceder directamente al método que comprobará un rol en especifico.
             if(Auth::isCoordinador()){

             }
             if(Auth::isDocumentador()){

             }
             //O también podemos detectar si el rol es uno personalizado...
             if(Auth::isRole("Ingeniero")){

             }
             $answer['user'] = Auth::user();
             $this->load->view('principal', $answer);
        }else {
         $answer['error'] = "error";
         $this->load->view('login', $answer);
        }
      }

      public function logout(){
        Auth::logout();
        $this->comprobarSesion();
      }

      public function comprobarSesion(){
        //Comprobar si existe una sesión...
        if(Auth::check()){
          $this->json(new Response(EMessages::SESSION_ACTIVE));
        }else{
          $this->json(new Response(EMessages::SESSION_INACTIVE));
        }
      }

      public function principalView(){
        $this->load->view('principal');
      }

      public function documenterStrartView(){
        $this->load->view('documenterStrart');
      }
      public function trackingDetails(){
        $this->load->view('trackingdetails');
      }
      
      public function toAssign(){
        $this->load->view('toAssign');
      }
      
      public function documenterPrincipalView(){
        $this->load->view('documenterPrincipal');
      }
      
      public function precheck(){
        $this->load->view('precheck');
      }
  }

?>
