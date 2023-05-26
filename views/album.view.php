<?php
require_once('libs\Smarty.class.php');
class AlbumView{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
    }
    public function showAllAlbums($albums){
        $this->smarty->assign('albums', $albums);
        $this->smarty->assign('title','Inicio');
        $this->smarty->display('albums.tpl');
    }
}