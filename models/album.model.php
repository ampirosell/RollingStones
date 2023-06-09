<?php
class AlbumModel{
    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=rolling_stones;charset=utf8', 'root', '');
        //$this->db = new PDO('mysql:host=localhost;'.'dbname=rolling_stones;charset=UTF-8', 'root' , '');
    }
    public function getAllAlbums(){
        $query = $this->db->prepare('SELECT * FROM albums');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function getOneAlbum($id){
        $query = $this->db->prepare('SELECT * FROM albums WHERE id_album = ?');
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function getSongsByAlbumID($id_album){
        $query=$this->db->prepare('SELECT * FROM `songs` INNER JOIN albums on songs.id_album=albums.id_album WHERE albums.id_album=?');
        $query->execute(array($id_album));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function insertAlbum($title_album,$year_release,$img_cover=' '){
        $query = $this->db->prepare("INSERT INTO `albums`  ( `titulo_album` ,`year_release` , `img_cover` ) VALUES (?,?,?)");
        $query->execute(array($title_album,$year_release,$img_cover));
        return $this->db->lastInsertId();
    }
}