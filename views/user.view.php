<?php
require_once('libs/Smarty.class.php');

class UserView{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
    }
    public function showLogin($msg='Inicie sesión para continuar'){
        $this->smarty->assign('msg', $msg);
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('page', 'Login');
        $this->smarty->display('login.tpl');
    }
}