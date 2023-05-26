<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once ('controllers/album.controller.php'); 

if (!empty($_GET['action'])) {
    $accion = $_GET['action'];
} else {
    $accion = 'albums';
}

// parseo el string de action por "/" y me devuelve el arreglo
$params = explode('/', $accion);

//
switch ($params[0]) {
    
    case 'albums' || 'router.php':
        $controller=new AlbumController();
        $controller->serveAllAlbums();
        break;
    /*case 'album':
        if(isset($id)&&!empty($id)){
            $controller=new AlbumsController();
            $controller->album($id);
        }
        break;
    case 'songs':
        $controller=new SongsController();
        $controller->songs();
        break;
    case 'sobre':
        $controller=new SongsController(); //este nombre debe ser el nombre de la clase del controller
        $controller->song(); 
        break;
    default: {
        $controller=new AlbumsController();
        $controller->error();
        break;
    }*/
}