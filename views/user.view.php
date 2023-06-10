<?php
require_once('libs/Smarty.class.php');

class UserView{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
    }
    public function showLogin($msg='Inicie sesion para continuar'){
        $this->smarty->assign('msg', $msg);
        if(isset($_SESSION['username'])){   
            $this->smarty->assign('username',$_SESSION['username']);
        }
        $this->smarty->assign('page', 'Login');
        $this->smarty->display('login.tpl');
    }

}