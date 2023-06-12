<?php

class AuthHelper {

    public function __construct() {   
    }
    public static function start(){
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }
    public static function checkTime(){
        AuthHelper::start();
        if(!isset($_SESSION['time'])){
            $_SESSION['time'] = time();
        }
        else {
            if(time() - $_SESSION['time'] >300){
                AuthHelper::logout();
                header("Location:". BASE_URL . "login");
                die();
            }
        }
    }
    public static function logout() {
        AuthHelper::start();
        session_destroy();
    }

    public static function setUser($user){
        AuthHelper::start();
        $_SESSION['time'] = time();
        $_SESSION['ID'] = $user['id'];
        $_SESSION['username'] = $user['username'];
    }

    public static function checkLoggedIn() {
        AuthHelper::start();
        AuthHelper::checkTime();
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