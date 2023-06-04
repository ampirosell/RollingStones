<?php
include_once('models/user.model.php');
include_once('views/user.view.php');

session_start(); 
class UserController{
    private $userModel;
    private $userView;
    public function __construct(){
        $this->userModel = new UserModel();
        $this->userView = new UserView();
    }
    public function serveLogin(){
        $this->userView->showLogin();
    }
    public function serveLogout($username){
        $_SESSION['username'] = $username;
        session_destroy();
        header('Location: login');
    }
    public function verify() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->userModel->getUserByUsername($username);
        if (!empty($user) && password_verify($password, $user['password_hash'])) {
            session_start();
            $_SESSION['ID'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $this->userView->showAfterLog($username);
            //como hacer que quede conectado?
        } else {
            $this->userView->showLogin('login incorrecto');
        }
    }
    /*public function checkLoggedIn(){ //mejor en el album controller?
        session_start();
        if(!isset($_SESSION['ID'])){
            header('Location: login');
            die();
        }
    }*/
}