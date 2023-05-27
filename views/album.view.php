<?php
require_once('libs\Smarty.class.php');
class AlbumView{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
    }
    public function showHome(){
        $this->smarty->assign('page', 'Inicio');
        $this->smarty->display('inicio.tpl');
    }
    public function showAllAlbums($albums){
        $this->smarty->assign('albums', $albums);
        $this->smarty->assign('page','Albums de los Rolling Stones');
        $this->smarty->display('albums.tpl');
    }
    public function showOneAlbum($album){
        $this->smarty->assign('album', $album);
        $this->smarty->assign('page','Album de Rolling Stones');
        $this->smarty->display('album.tpl');
    }
    public function showError($msg){
        $this->smarty->assign('page', 'Error');
        $this->smarty->assign('msg', $msg);
        $this->smarty->display('error.tpl');
    }
}