<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once('controllers/album.controller.php');
require_once('controllers/user.controller.php');
require_once('controllers/Song.controller.php');

if (!empty($_GET['action'])) {
    $accion = $_GET['action'];
} else {
    $accion = 'home';
}

$params = explode('/', $accion);
$AlbumController = new AlbumController();
$UserController = new UserController();
$SongController = new songController();

switch ($params[0]) {
    case 'login':
        $UserController->serveLogin();
        break;
    case 'home':
        $AlbumController->home();
        break;
    case 'verify':
        $UserController->verify();
        break;
    case 'albums':
        $AlbumController->serveAllAlbums();
        break;
    case 'album':
        $AlbumController->serveOneAlbumAndSongs($params[1]);
        break;
    case 'songs':
        $SongController->serveAllSongs();
        break;
    case 'song':
        $SongController->serveOneSong($params[1]);
        break;
    case 'sobre':
        $AlbumController->sobre();
        break;
    case 'addAlbum':
        $AlbumController->ShowAddAlbum();
        break;
    /*case 'addA':
        $AlbumController->addAlbum();
        break;*/
    case 'addSong':
        $SongController->ShowAddSong();
        break;
    case 'addS':
        $SongController->addSong();
        break;
    case 'logout':
        $UserController->logout();
        break;
    default: 
        $AlbumController->showError('Error en router');
        break;
}