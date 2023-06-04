<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once ('controllers/album.controller.php'); 
require_once ('controllers/user.controller.php'); 

if (!empty($_GET['action'])) {
    $accion = $_GET['action'];
} else {
    $accion = 'home';
}

$params = explode('/', $accion);
$AlbumController = new AlbumController();
$UserController = new UserController();

switch ($params[0]) {
    case 'home':
        $AlbumController->home();
        break;
    case 'login':
        $UserController->serveLogin();
        break;
    case 'logout':
        /*if(isset($_SESSION['ID'])&&!empty($_SESSION['username'])){
            $_SESSION['username']=$username;
        }*/
        $UserController->logout();
        break;
    case 'verify':
        $UserController->verify();
        break;
    case 'albums' :
        $AlbumController->serveAllAlbums();
        break;
    case 'album':
        $AlbumController->serveOneAlbumAndSongs($params[1]);
        break;
    case 'sobre':
        $AlbumController->sobre();
        break;
    /*case 'add':
        $AlbumController->pagAddAlbum();
        break; 
    case 'songs':
        $controller=new SongsController();
        $controller->serveAllSongs();
        break;
    case 'song':
        $controller=new SongsController();
        $controller->serveOneSong();
        break;*/
    default: {
        echo('Error en router');
        break;
    }
}