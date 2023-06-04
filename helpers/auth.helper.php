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
        $_SESSION['ID'] = $user->id;
        $_SESSION['NAME'] = $user->username;
        //$_SESSION['ADMIN'] = $user->admin;
    }
    
    public static function logout() {
        self::start();
        session_destroy();
    }

    public static function checkLoggedIn() {
        self::start();
        if (!isset($_SESSION['username'])){
            header('Location: ' . BASE_URL . "login");
            die;
        }
    }

    public static function getLoggedUserName() {
        self::start();
        if (isset($_SESSION['username'])) {
            return $_SESSION['username'];
        } else {
            return null;
        }
    }




}