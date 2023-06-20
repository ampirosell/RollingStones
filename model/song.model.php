<?php

class songModel {
    private $db;
    
    function __construct(){
        $this->db=new PDO( 'mysql:host=localhost;'
        .'dbname=rollingstonesdiscografia;charset=utf8'
        , 'root', '');
    }

    public function getSongs() {
        $sentencia = $this->db->prepare("SELECT * FROM `songs`");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public function getSong($id) {
        $sentencia = $this->db->prepare("SELECT * FROM `songs` WHERE id_album = ?");
        $sentencia->execute([$id]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function getSelect(){
        $sentencia = $this->db->prepare("SELECT * FROM `albums`");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertSong($song,$album_id){
        $query=$this->db->prepare("INSERT INTO `songs` (`titulo`, `id_album`) VALUES(?,?)");
        $query->execute(array($song,$album_id));
        return $this->db->lastInsertId();
          
    
    }

    public function deleteSongById($id){
        $query=$this->db->prepare("DELETE from `songs` WHERE id_song= ? ");
        $query->execute([$id]);        

    }

    public function getAlbum($id) {
        $sentencia = $this->db->prepare("SELECT * FROM `albums` WHERE id_album = ?");
        $sentencia->execute([$id]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }


    public function getSongIdSong($id) {
        $sentencia = $this->db->prepare("SELECT * FROM `songs` WHERE id_song = ?");
        $sentencia->execute([$id]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    
    public function update($title,$id){
        $query=$this->db->prepare("UPDATE `songs` SET `titulo`= ?  WHERE id_song=?");
        $query->execute(array($title,$id)); 
        return $query->fetch(PDO::FETCH_OBJ);

    }

    public function updateAlbumById($title,$id){
        $query=$this->db->prepare("UPDATE `albums` SET `titulo_album`= ?  WHERE id_album=?");
        $query->execute(array($title,$id)); 
        return $query->fetch(PDO::FETCH_OBJ);

    }


}


?>
