<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once ('controllers/album.controller.php'); 

if (!empty($_GET['action'])) {
    $accion = $_GET['action'];
} else {
    $accion = 'home';
}

$params = explode('/', $accion);

switch ($params[0]) {
    case 'home':
        $controller = new AlbumController();
        $controller->home();
        break;
    case 'albums' :
        $controller=new AlbumController();
        $controller->serveAllAlbums();
        break;
    case 'album':
        $id=4;
        if(isset($id)&&!empty($id)){
            $controller=new AlbumController();
            $controller->serveOneAlbum($id);
        }
        break;
    case 'sobre':
        $controller=new AlbumController();
        $controller->sobre();
        break;
    case 'add':
        $controller=new AlbumController();
        $controller->addAlbum();
        break; 
    /*case 'songs':
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