<?php
include_once('models/album.model.php');
include_once('views/album.view.php');

class AlbumController{
    private $model;
    private $view;
    public function __construct(){
        $this->model = new AlbumModel();
        $this->view = new AlbumView();
    }
    public function home(){
        $this->view->showHome();
    }
    public function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['ID_USER'])){
            header('Location: login');
            die();
        }
    }
    public function serveAllAlbums(){
        //$this->checkLoggedIn();
        $albums=$this->model->getAllAlbums();
        if(!empty($albums)){
            $this->view->showAllAlbums($albums);
        }
        else{
            $this->view->showError('error al obtener albums');
        }
    }
    public function serveOneAlbumAndSongs($id_album){
        $albumCompleto=$this->model->getSongsByAlbumID($id_album);
        $this->view->showSongsByAlbum($albumCompleto,$id_album);
    }

    /*public function pagAddAlbum(){
        $this->view->showAddAlbum();
    
    }
    public function addAlbum(){
        $album = $this->model->addAlbum();
    }*/
    public function sobre(){
        $this->view->showSobre();
    }
}