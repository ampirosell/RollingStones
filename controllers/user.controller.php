<?php
include_once('models/user.model.php');
include_once('views/user.view.php');
require_once('helpers/auth.helper.php');

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
        $this->logout();
        header('Location:home');
    }
    public function logout() {
        AuthHelper::logout();
        header("Location: " . BASE_URL . 'home');
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
}