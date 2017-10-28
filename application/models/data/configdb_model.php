<?php

defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
mysqli_report(MYSQLI_REPORT_STRICT);
session_start();

class configdb_model extends CI_Model {

    public $dbconn4;

    public function __construct() {
        
    }

    public function startSession($user) {
        $_SESSION['userName'] = $user->getName();
    }

    public function openSession() {
        $user = "root";
        $pass = "";
        $db = "zolid";

        try {
            $connection = new mysqli('localhost', $user, $pass, $db);
            $connection->set_charset("utf8");
        } catch (Exception $e) {
            $connection = "false";
        }
        return $connection;
    }

    public function closeSession($session) {
        $session->close();
    }

    public function destroySession() {
        session_destroy();
    }

}

?>
