<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('data/dao_user_model');
<<<<<<< HEAD
        $this->load->model('data/dao_station_model');
        $this->load->model('data/dao_band_model');
        $this->load->model('data/dao_work_model');
        $this->load->model('data/dao_technology_model');
      }

      private function validUser($request){
=======
    }

    private function validUser($request) {
>>>>>>> 225a78808193c2b77b29131dc5fd6c507d762684
        return Auth::attempt([
                    "n_mail_user" => $request->username,
                    "n_password" => $request->password,
                    "OR" => [
                        "n_username_user" => $request->username
                    ]
        ]);
    }

    public function time() {
        $x = date("Y-m-d h:i:sa");
        echo $x . "<br/>";
        echo Hash::getTimeStamp($x);
    }

    public function loginUser() {
        if (!Auth::check()) {
            $res = $this->validUser($this->request);
        } else {
            $res = true;
        }
        //Comprobamos si el Auth ha encontrado válida las credenciales consultadas...
        if ($res) {
            //Se actualiza la forma de validar los roles...
            //Podemos acceder directamente al método que comprobará un rol en especifico.
            if (Auth::isCoordinador()) {

            }
            if (Auth::isDocumentador()) {

            }
            //O también podemos detectar si el rol es uno personalizado...
            if (Auth::isRole("Ingeniero")) {

            }
            Redirect::redirect(URL::to("User/principal"));
        } else {
            $answer['error'] = "error";
            $this->load->view('login', $answer);
        }
    }

    public function principal() {
        $answer['user'] = Auth::user();
        $this->load->view('principal', $answer);
    }

    public function logout() {
        Auth::logout();
        $this->comprobarSesion();
    }

    public function comprobarSesion() {
        //Comprobar si existe una sesión...
        if (Auth::check()) {
            $this->json(new Response(EMessages::SESSION_ACTIVE));
        } else {
            $this->json(new Response(EMessages::SESSION_INACTIVE));
        }
    }

    public function principalView() {
        $this->load->view('principal');
    }

      public function documenterStrartView(){
        $station = new dao_station_model();
        $band = new dao_band_model();
        $work = new dao_work_model();
        $technology = new dao_technology_model();
        $res['stations'] = $station->getAll();
        $res['cities'] = $station->getAllCities();
        $res['regions'] = $station->getAllRegions();
        $res['bands'] = $band->getAll();
        $res['works'] = $work->getAll();
        $res['technologies'] = $technology->getAll();
        $answer['respuesta'] = json_encode($res);
        $this->load->view('documenterStrart', $answer);
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
