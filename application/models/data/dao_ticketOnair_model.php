<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

class dao_ticketOnair_model extends CI_Model {

    public function __construct() {
        $this->load->model('dto/TicketOnAirModel');
        $this->load->model('dto/StatusModel');
        $this->load->model('dto/SubstatusModel');
    }

    public function insertTicket($request) {
        try {
            $ticket = new TicketOnAirModel();
            $datos = $ticket->insert($request->all());
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
        } catch (ZolidException $ex) {
            return $ex;
        }
    }

    public function getAll() {
        try {
            $ticketOnAir = new TicketOnAirModel();
            $datos = $ticketOnAir->get();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
        } catch (ZolidException $ex) {
            return $ex;
        }
    }

    public function findByIdOnAir($id) {
        try {
            $ticketOnAir = new TicketOnAirModel();
            $datos = $ticketOnAir->where("k_id_onair", "=", $id)
                    ->first();
            //Evaluamos si se encontró algún registro.
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
        } catch (ZolidException $ex) {
            return $ex;
        }
    }

    public function findByIdPrecheck($id) {
        try {
            $ticketOnAir = new TicketOnAirModel();
            $datos = $ticketOnAir->where("k_id_precheck", "=", $id)
                    ->first();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
        } catch (ZolidException $ex) {
            return $ex;
        }
    }

    public function getAllStates() {
        try {
            $response = new Response(EMessages::QUERY);
            $statusModel = new StatusModel();
            $subStatusModel = new SubstatusModel();
            $data = array();
            $data["states"] = $statusModel->get();
            $data["substates"] = $subStatusModel->get();
            $response->setData($data);
            return $response;
        } catch (ZolidException $ex) {
            return $ex;
        }
    }

    function updateTicket($request) {
        try {
            $ticketOnAir = new TicketOnAirModel();
            //Consultamos el registro onair...
            $temp = $ticketOnAir->where("k_id_onair", "=", $request->ticket_on_air->k_id_onair)->get();
            if ($temp) {
                //Se actualizaría el registro onair...
                $ticketOnAir->where("k_id_onair", "=", $request->ticket_on_air->k_id_onair)
                        ->update($request->ticket_on_air->all());
                //Se actualiza el preparation_stage.
                $ps = new PreparationStageModel();
                $ps->join("preparation_stage", "prepartion_stage.k_id_preparation", "=", "k_id_preparation")
                        ->where("prepartion_stage.k_id_preparation", "=", $temp->k_id_preparation)
                        ->update($request->preparation_stage->all());
            }
            $response = new Response(EMessages::UPDATE);
            $response->setData($temp);
            return $response;
            return null;
        } catch (ZolidException $ex) {
            return $ex;
        }
    }

}

?>
