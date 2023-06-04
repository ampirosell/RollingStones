<?php
include_once('models/album.model.php');
include_once('views/album.view.php');

class AlbumController{
    private $albumModel;
    private $albumView;
    public function __construct(){
        $this->albumModel = new AlbumModel();
        $this->albumView = new AlbumView();
    }
    public function home(){
        $this->albumView->showHome();
    }
    public function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['ID'])){
            header('Location: login');
            die();
        }
    }
    public function serveAllAlbums(){
        $this->checkLoggedIn();
        $albums=$this->albumModel->getAllAlbums();
        if(!empty($albums)){
            $this->albumView->showAllAlbums($albums);
        }
        else{
            $this->albumView->showError('error al obtener albums');
        }
    }
    public function serveOneAlbumAndSongs($id_album){
        $fullAlbum=$this->albumModel->getSongsByAlbumID($id_album);
        $this->albumView->showSongsByAlbum($fullAlbum,$id_album);
    }

    /*public function pagAddAlbum(){
        $this->valbumView->showAddAlbum();
    
    }
    public function addAlbum(){
        $album = $this->albumModel->addAlbum();
    }*/
    public function sobre(){
        $this->albumView->showSobre();
    }
}