<?php

class Auth {

    private static $sql;
    private static $class;

    function __construct() {

    }

    public static function init() {
        if (isset(self::$class)) {
            return;
        }
        $cogs = require_once APPPATH . "config/auth.php";
        self::$class = $cogs["providers"]["users"]["model"];
        require_once APPPATH. "models/dto/" . self::$class . ".php";
    }

    /**
     *
     * @param Array $args
     * @param boolean $remember
     */
    public static function attempt($args, $remember = false) {
        self::init();
        $class = new self::$class();
        $db = new DB();
        $table = $class->getTable();
        self::$sql = "SELECT * FROM `$table` WHERE ";
        $i = 0;
        $max = count($args);
        $condition = null;
        foreach ($args as $key => $value) {
            if ($key == "OR" && is_array($value)) {
                $j = 0;
                $mx = count($value);
                foreach ($value as $k => $v) {
                    $condition = " OR ";
                    self::$sql .= ((($i > 0 && $j < ($mx)) ? " $condition " : " "));
                    self::$sql .= "`$k` = \"$v\"";
                    $j++;
                }
            } else {
                if (is_string($value)) {
                    $condition = " AND ";
                    self::$sql .= ((($i > 0 && $i < ($max)) ? " $condition " : " ")) . " `$key` = \"$value\"";
                }
            }
            $i++;
        }
        $user = $db->select(self::$sql)->first();
        if($user != null){
          self::save($user);
        }
        return $user != null;
    }

    function str_lreplace($search, $replace, $subject) {
        $pos = strrpos($subject, $search);
        if ($pos !== false) {
            $subject = substr_replace($subject, $replace, $pos, strlen($search));
        }
        return $subject;
    }

    public static function save($user) {
        Session::set("auth", $user);
    }

    public static function check() {
        return null !== (Session::get("auth"));
    }

    public static function user() {
        self::init();
        if (null !== $session = Session::get("auth")) {
            $class = self::$class;
            return new $class($session);
        } else {
            return null;
        }
    }

    public static function logout() {
        Session::destroy("auth");
    }

}
