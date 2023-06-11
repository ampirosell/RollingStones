<?php

class AuthHelper {

    public function __construct() {   
    }
    public static function start(){
        session_start();
    }
    
    public static function logout() {
        session_destroy();
    }

    public static function checkLoggedIn() {
        AuthHelper::start();
        if (!isset($_SESSION['username'])){
            header('Location: ' . BASE_URL . "login");
            die;
        }
    }

    public static function getLoggedUserName() {
        if (isset($_SESSION['username'])) {
            return $_SESSION['username'];
        } else {
            return null;
        }
    }

}