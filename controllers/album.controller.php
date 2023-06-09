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

    public function serveAllAlbums(){
        AuthHelper::checkLoggedIn();
        $albums=$this->albumModel->getAllAlbums();
        if(!empty($albums)){
            $this->albumView->showAllAlbums($albums);
        }
        else{
            $this->albumView->showError('error al obtener albums');
        }
    }
    public function serveOneAlbumAndSongs($id_album){
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
        $this->albumView->showAddAlbum();
    
    }
    public function addAlbum(){
        AuthHelper::checkLoggedIn();
        $title_album =$_GET["title_album"];
        $year_release=$_GET["year_release"];
        $img_cover=$_GET["img_cover"];


        if(!empty($title_album)&&!empty($year_release)){
            $this->albumModel-> insertAlbum($title_album,$year_release,$img_cover); 
            header('Location:' . BASE_URL . 'albums'); 
        }
    }
    public function sobre(){
        $this->albumView->showSobre();
    }
    public function showError($msg='error'){
        $this->albumView->showError($msg);
    }
}