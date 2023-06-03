<?php
require_once('libs/Smarty.class.php');

class UserView{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
    }
    public function showLogin($msg = null){
        $this->smarty->assign('msg', $msg);
        $this->smarty->assign('page', 'Login');
        $this->smarty->display('login.tpl');
    }
    public function showAfterLog($username){
        $this->smarty->assign('username',$username);
        $this->smarty->assign('page', 'Welcome!');
        $this->smarty->display('afterLogin.tpl');
    }
    public function showError($error){
        $this->smarty->assign('msg', $error);
        $this->smarty->display('error.tpl');
    }
}