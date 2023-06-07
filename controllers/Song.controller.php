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
        $songs = $this-> songModel-> getSongs();
        if (!empty($songs))
            $this-> songView -> showSongs($songs);
        else
            $this-> songView -> showError('No hay canciones para mostrar.');

    }

    public function serveOneSong($id){
        $song = $this-> songModel-> getSong($id);
        if (!empty($song))
            $this-> songView -> showSong($song);
        else
            $this-> songView -> showError('No hay ninguna canción para mostrar.');

    }

    public function ShowAddSong(){
        $select= $this-> songModel-> getSelect();
        $this-> songView -> showAddSong($select);        
    }

    public function addSong(){
        AuthHelper::checkLoggedIn();
        //validar entrada datos
        $song =$_GET["songName"];
        $album_id=$_GET["albumId"];
        $this->songModel-> insertSong($song,$album_id); 
        header("Location: " . BASE_URL); 
      
    }

    public function deleteSong($id){
        $this->songModel->deleteSongById($id);
        header("Location: " . BASE_URL); 
    }
}
?>