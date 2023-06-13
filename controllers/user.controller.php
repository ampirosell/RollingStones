<?php
include_once('models/user.model.php');
include_once('views/user.view.php');
require_once('helpers/auth.helper.php');

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
    public function logout() {
        AuthHelper::logout();
        header("Location: " . BASE_URL . 'home');
    }

    public function verify() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->userModel->getUserByUsername($username);
        if (isset($user)&&!empty($user)&&isset($username)&&!empty($username) 
        && isset($password)&&!empty($password)
        && password_verify($password, $user['password_hash'])) {
            AuthHelper::start();
            AuthHelper::setUser($user);
            header("Location: " . BASE_URL . 'home');
        } else {
            $this->userView->showLogin('login incorrecto');
        }
    }
}