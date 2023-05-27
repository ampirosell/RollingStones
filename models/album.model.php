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

}