<?php
require_once('models/Song.model.php');
require_once('models/album.model.php');
require_once('views/Song.view.php');


class songController{

    private $songView;
    private $songModel;
    private $albumModel;

    function __construct(){
        $this->songView=new songView();
        $this->songModel=new songModel();
        $this->albumModel=new albumModel();

    }
    public function serveAllSongs(){
        AuthHelper::checkTime();
        $songs = $this-> songModel-> getSongs();
        if (!empty($songs))
            $this-> songView -> showSongs($songs);
        else
            $this-> songView -> showError('No hay canciones para mostrar.');

    }

    public function serveOneSong($id){
        AuthHelper::checkTime();
        $song = $this-> songModel-> getSong($id);
        if (isset($song)&&!empty($song)){
            $this-> songView -> showSong($song);
        }
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
        if(isset($song)&&!empty($song)&&isset($album_id)&&!empty($album_id)){
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
    public function editSong($id,$id_album){
        AuthHelper::checkLoggedIn();
        $song = $this-> songModel-> getSong($id);
        $album=$this->albumModel->getOneAlbum($id_album);
        $albums=$this->albumModel->getAllAlbums();
        if (!empty($song)&&isset($song)&&!empty($album)&&isset($album))
            $this-> songView -> showEditSong($song,$album, $albums);
        else
            $this-> songView -> showError('No hay ninguna canción para mostrar.');
            
    }

    public function updateSong($id){
        AuthHelper::checkLoggedIn();
        $newTitleSong=$_POST["title_song"];
        $newIdAlbum=$_POST["albumId"];
        if(isset($newTitleSong)&&!empty($newTitleSong)&&isset($newIdAlbum)&&!empty($newIdAlbum)){
            $this->songModel->update($newTitleSong,$newIdAlbum, $id);      
            header("Location: " . BASE_URL . "album/".$newIdAlbum);
        }
        else{
            $this->songView->showError('error al editar cancion');
        }
    }
}
?>