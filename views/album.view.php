<?php
require_once('libs/Smarty.class.php');
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
    public function showSongsByAlbum($albumCompleto,$id_album){
        $this->smarty->assign('songs', $albumCompleto);
        $this->smarty->assign('id_album', $id_album);
        $this->smarty->assign('page','Canciones de Rolling Stones');
        $this->smarty->display('songs.tpl');
    }
    public function showSobre(){
        $this->smarty->assign('page','Sobre');
        $this->smarty->display('sobre.tpl');
    }
    public function showError($msg){
        $this->smarty->assign('page', 'Error');
        $this->smarty->assign('msg', $msg);
        $this->smarty->display('error.tpl');
    }
    /*public function showAddAlbum(){
        $this->smarty->assign('page', 'Agregar Album');
        $this->smarty->display('addAlbum.tpl');
    }*/
}