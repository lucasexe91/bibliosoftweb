<?php

class AuthHelper {

    public function __construct() {
    
    }

    static private function start() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }

    static public function login($user) {
        self::start();
        $_SESSION['IS_LOGGED'] = true;
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['USERNAME'] = $user->usuario;
        $_SESSION['ADMIN'] = $user->numeroadministrador;
    }

    public static function logout() {
        self::start();
        session_destroy();
    }

    public static function checkLoggedIn() {
        self::start();
        if (!isset($_SESSION['ID_USER'])){
            header('Location: ' . BASE_URL . "login");
            die;
        }
    }

    public static function getLoggedUserName() {
        self::start();
        if (isset($_SESSION['USERNAME'])) {
            return $_SESSION['USERNAME'];
        } else {
            return false;
        }
    }

    public static function adminStatus() {
        self::start();
        if (isset($_SESSION['ADMIN'])) {
            return ($_SESSION['ADMIN']);
        } else {
            return false;
        }
    }


}