<?php

class AuthHelper {

    public function __construct() {
        //session_start();    
    }

    
    /*static public function login($user) {
        $_SESSION['IS_LOGGED'] = true;
        $_SESSION['ID'] = $user->id;
        $_SESSION['username'] = $user->username;
    }*/
    
    public static function logout() {
        session_destroy();
    }

    public static function checkLoggedIn() {

        if (!isset($_SESSION['username'])){
            header('Location: ' . BASE_URL . "login");
            die;
        }
    }

/*    public static function getLoggedUserName() {
        self::start();
        if (isset($_SESSION['username'])) {
            return $_SESSION['username'];
        } else {
            return null;
        }
    }
*/



}