<?php
require_once('libs/Smarty.class.php');
class AlbumView{
    private $smarty;
    
    function __construct(){
        
        $this->smarty = new Smarty();
        
    }
    public function showHome(){
        if(isset($_SESSION['username'])){   
            $this->smarty->assign('username',$_SESSION['username']);
        }
        $this->smarty->assign('page', 'Inicio');
        $this->smarty->display('inicio.tpl');
    }
    public function showAllAlbums($albums){
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('albums', $albums);
        $this->smarty->assign('page','Todos los albums de los Rolling Stones');
        $this->smarty->display('albums.tpl');
    }
    public function showSongsByAlbum($albumCompleto,$id_album, $title_album, $year_release){
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('title_album', $title_album);
        $this->smarty->assign('year_release', $year_release);
        $this->smarty->assign('songs', $albumCompleto);
        $this->smarty->assign('id_album', $id_album);
        $this->smarty->assign('page','Canciones de '.$title_album);
        $this->smarty->display('songs.tpl');
    }
    public function showSobre(){
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('page','Sobre nosotras');
        $this->smarty->display('sobre.tpl');
    }
    public function showAddAlbum(){
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('page', 'Agregar album');
        $this->smarty->display('addAlbum.tpl');
    }
    public function showDeleteAlbumConfirmation($id){
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('id', $id);
        $this->smarty->assign('page', 'Eliminar album '.$id);
        $this->smarty->display('deleteAlbumConfirmation.tpl');
    }
    public function showEditAlbum($album){
        $this->smarty->assign('page', 'Editar album');
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('album', $album);
        $this->smarty->display('templates/editAlbum.tpl');
    }
    public function showError($msg){
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('page', 'Error');
        $this->smarty->assign('msg', $msg);
        $this->smarty->display('error.tpl');
    }
}