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
    public function serveLogout(){
        session_destroy();
        header('Location: /');
    }
    public function verify() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->userModel->getUserByUsername($username);
        if (!empty($user) && password_verify($password, $user['password_hash'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['username'];
            $this->userView->showAfterLog($username);
            //header('Location: home');//ver aca
        } else {
            $this->userView->showLogin('login incorrecto');
        }
    }
    /*public function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['ID_USER'])){
            header('Location: login');
            die();
        }
    }*/
}