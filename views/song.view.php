<?php
require_once('libs/Smarty.class.php');

class songView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }
    public function showSongs($songs) {
        $this->smarty->assign('page', 'Canciones de los Rolling Stones');
        if(isset($_SESSION['username'])){   
            $this->smarty->assign('username',$_SESSION['username']);
        }
        $this->smarty->assign('songs', $songs);
        $this->smarty->display('showAllSongs.tpl');
    }
    public function showAddSong($select) {
        $this->smarty->assign('page', 'Agregar una cancion');
        if(isset($_SESSION['username'])){   
            $this->smarty->assign('username',$_SESSION['username']);
        }
        $this->smarty->assign('select', $select);
        $this->smarty->display('addSong.tpl');

    }
    
    public function showSong($song) {
        $this->smarty->assign('page', 'Cancion');
        if(isset($_SESSION['username'])){   
            $this->smarty->assign('username',$_SESSION['username']);
        }
        $this->smarty->assign('song', $song);
        $this->smarty->display('song.tpl');
    }

    public function showError($msgError) {
        echo $msgError;
    }

   
    public function showSelect($select) {
        $this->smarty->assign('select', $select);
        $this->smarty->display('templates/select.tpl');
    }
}


?>