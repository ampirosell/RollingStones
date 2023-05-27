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
    case 'home' || 'router.php':
        $controller = new AlbumController();
        $controller->home();
        break;
    case 'albums':
        $controller=new AlbumController();
        $controller->serveAllAlbums();
        break;
    case 'album':
        if(isset($id)&&!empty($id)){
            $controller=new AlbumController();
            $controller->serveOneAlbum($id);
        }
        break;
    case 'sobre':
        echo('trabajo de vanina y amparo'); 
        break;
    /*case 'songs':
        $controller=new SongsController();
        $controller->songs();
        break;
    default: {
        $controller=new AlbumsController();
        $controller->error();
        break;
    }*/
}