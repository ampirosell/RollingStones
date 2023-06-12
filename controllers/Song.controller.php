<?php
require_once('models/Song.model.php');
require_once('views/Song.view.php');


class songController{

    private $songView;
    private $songModel;

    function __construct(){
        $this->songView=new songView();
        $this->songModel=new songModel();

    }
    public function serveAllSongs(){
        AuthHelper::start();
        AuthHelper::checkTime();
        $songs = $this-> songModel-> getSongs();
        if (!empty($songs))
            $this-> songView -> showSongs($songs);
        else
            $this-> songView -> showError('No hay canciones para mostrar.');

    }

    public function serveOneSong($id){
        AuthHelper::start();
        AuthHelper::checkTime();
        $song = $this-> songModel-> getSong($id);
        if (!empty($song))
            $this-> songView -> showSong($song);
        else
            $this-> songView -> showError('No hay ninguna canción para mostrar.');

    }

    public function ShowAddSong(){
        AuthHelper::checkLoggedIn();
        $select= $this-> songModel-> getSelect();
        $this-> songView -> showAddSong($select);        
    }

    public function addS(){
        AuthHelper::checkLoggedIn();
        $song =$_POST["songName"];
        $album_id=$_POST["albumId"];
        if(!empty($song)&&!empty($album_id)){
            $this->songModel-> insertSong($song,$album_id); 
            header("Location: " . BASE_URL . 'album'. '/' . $album_id); 
        }
        else{
            $this-> songView -> showError('No se ha podido añadir la canción');
        }
    }

    public function deleteSong($id){
        AuthHelper::checkLoggedIn();
        if(isset($id)&&!empty($id)){
            $this->songModel->deleteSongById($id);
            header("Location: " . BASE_URL . 'songs'); 
        }
        else{
            $this->songView->showError('No se ha podido eliminar la canción');
        }
    }
}
?>