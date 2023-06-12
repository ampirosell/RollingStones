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
        AuthHelper::start();
        AuthHelper::checkTime();
        $this->albumView->showHome();
    }

    public function serveAllAlbums(){
        AuthHelper::start();
        AuthHelper::checkTime();
        $albums=$this->albumModel->getAllAlbums();
        if(!empty($albums)){
            $this->albumView->showAllAlbums($albums);
        }
        else{
            $this->albumView->showError('error al obtener albums');
        }
    }
    public function serveOneAlbumAndSongs($id_album){
        AuthHelper::start();
        AuthHelper::checkTime();
        $fullAlbumSongs=$this->albumModel->getSongsByAlbumID($id_album);
        $album=$this->albumModel->getOneAlbum($id_album);
        $title_album=$album->titulo_album;
        $year_release=$album->year_release;
        if(!empty($fullAlbumSongs)){
            $this->albumView->showSongsByAlbum($fullAlbumSongs,$id_album,$title_album,$year_release);
        }
        else{
            $this->albumView->showError('error al obtener canciones');
        }
    }
    public function ShowAddAlbum(){
        AuthHelper::checkLoggedIn();
        $this->albumView->showAddAlbum();
    }
    public function addA(){
        AuthHelper::checkLoggedIn();
        $title_album =$_POST["title_album"];
        $year_release=$_POST["year_release"];
        $img_cover=$_POST["img_cover"];
        if(!empty($title_album)&&!empty($year_release)){
            $this->albumModel-> insertAlbum($title_album,$year_release,$img_cover); 
            header("Location: " . BASE_URL . 'albums' );
        }
        else{
            $this->albumView->showError('error al insertar album');
        }
    }
    public function deleteAlbumConfirmation($id){
        AuthHelper::checkLoggedIn();
        $this->albumView->showDeleteAlbumConfirmation($id);
    }
    public function deleteAlbum($id){
        AuthHelper::checkLoggedIn();
        if(isset($id)&&!empty($id)){
            $this->albumModel->deleteAlbumById($id);
            header("Location: " . BASE_URL . 'albums'); 
        }
        else{
            $this->albumView->showError('No se ha podido eliminar la canción');
        }
    }
    public function sobre(){
        AuthHelper::start();
        AuthHelper::checkTime();
        $this->albumView->showSobre();
    }
    public function showError($msg='error'){
        AuthHelper::start();
        AuthHelper::checkTime();
        $this->albumView->showError($msg);
    }
}