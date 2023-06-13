<?php

class songModel {
    private $db;
    
    function __construct(){
        $this->db=new PDO( 'mysql:host=localhost;'
        .'dbname=rolling_stones;charset=utf8'
        , 'root', '');
    }

    public function getSongs() {
        $sentencia = $this->db->prepare("SELECT * FROM `songs`");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public function getSong($id) {
        $sentencia = $this->db->prepare("SELECT * FROM `songs` WHERE id_song = ?");
        $sentencia->execute([$id]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function getSelect(){
        $sentencia = $this->db->prepare("SELECT * FROM `albums`");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertSong($song,$album_id){
        $query=$this->db->prepare("INSERT INTO `songs` (  `title_song`, `id_album`) VALUES(?,?)");
        $query->execute(array($song,$album_id));
        return $this->db->lastInsertId();
    }

    public function deleteSongById($id){
        $query=$this->db->prepare("DELETE from `songs` WHERE id_song= ? ");
        $query->execute([$id]);        
    }
    public function update($title,$newId, $id){
        $query=$this->db->prepare("UPDATE `songs` SET `title_song`= ?  WHERE id_song=?");
        $query->execute(array($title,$id)); 
        $query=$this->db->prepare("UPDATE `songs` SET `id_album` = ? WHERE `title_song` = ?");
        $query->execute(array($newId,$title));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
}
?>