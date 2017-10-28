<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dao_user_model extends CI_Model {

    protected $session;

    public function __construct() {
        $this->load->model('dto/Users');
    }

    public function getAll($request){
      try{
        $user = new Users();
        $datos = $user->get();
        $response = new Response(EMessages::SUCCESS);
        $response->setData($datos);
        return $response;
      }catch(ZolidException $ex){
        return $ex;
      }
    }

    public function getCustom($request){
      try{
        $user = new Users();
        $datos = $user->where("token","=","123")
                 ->orWhere("password","=","12345")
                 ->get();
        $response = new Response(EMessages::SUCCESS);
        $response->setData($datos);
        return $response;
      }catch(ZolidException $ex){
        return $ex;
      }
    }


    public function findById($request){
          try{
            $user = new Users();
            $datos = $user
                  ->where("id", "=", $request->id)
                  ->first();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
          }catch(ZolidException $ex){
            return $ex;
          }
        }

    public function insert($request){
      try{
        $user = new Users();
        $user->insert($request->all());
        return new Response(EMessages::INSERT);
      }catch(ZolidException $ex){
        return $ex;
      }
    }

    public function update($request){
      try{
        $user = new Users();
        $user->where("id","=",$request->id)
             ->update($request->all());
        return new Response(EMessages::UPDATE);
      }catch(ZolidException $ex){
        return $ex;
      }
    }

    public function delete($request){
      try{
        $user = new Users();
        $user->where("id","=",$request->id)
             ->delete();
        return new Response(EMessages::DELETE);
      }catch(ZolidException $ex){
        return $ex;
      }
    }
}
