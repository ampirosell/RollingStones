<?php
class UserModel{
    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=rolling_stones;charset=utf8', 'root', '');
    }
    public function getUserByUserName($username){
        $query = $this->db->prepare('SELECT * FROM users WHERE username = :username');
        $query->execute(array(':username' => $username));
        return $query->fetch(PDO::FETCH_ASSOC);
    }

}