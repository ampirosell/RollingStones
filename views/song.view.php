<?php
require_once('libs/Smarty.class.php');

class songView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }
    public function showSongs($songs) {
        $this->smarty->assign('page', 'Canciones de los Rolling Stones');
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('songs', $songs);
        $this->smarty->display('showAllSongs.tpl');
    }
    public function showAddSong($select) {
        $this->smarty->assign('page', 'Agregar una cancion');
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('select', $select);
        $this->smarty->display('addSong.tpl');

    }
    
    public function showSong($song) {
        $this->smarty->assign('page', 'Cancion');
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('song', $song);
        $this->smarty->display('song.tpl');
    }

    public function showError($msg=' ') {
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('page', 'Error');
        $this->smarty->assign('msg', $msg);
        $this->smarty->display('error.tpl');
    }
}
?>