<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once('controllers/album.controller.php');
require_once('controllers/user.controller.php');
require_once('controllers/Song.controller.php');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);
$AlbumController = new AlbumController();
$UserController = new UserController();
$SongController = new songController();

switch ($params[0]) {
    case 'home':
        $AlbumController->home();
        break;
    case 'login':
        $UserController->serveLogin();
        break;
    case 'verify':
        $UserController->verify();
        break;
    case 'logout':
        $UserController->logout();
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
    case 'addA':
        $AlbumController->addA();
        break;
    case 'addSong':
        $SongController->ShowAddSong();
        break;
    case 'addS':
        $SongController->addS();
        break;
    case 'deleteS':
        $SongController->deleteSong($params[1]);
        break;
    case 'deleteA':
        $AlbumController->deleteAlbumConfirmation($params[1]);
        break;
    case 'deleteAlbumConfirm':
        $AlbumController->deleteAlbum($params[1]);
        break;
    case 'editS':
        $SongController->editSong($params[1],$params[2]);
        break;
    case 'updateS':
        $SongController->updateSong($params[1]);
        break;
    case 'editA':
        $AlbumController->editAlbum($params[1]);
        break;
    case 'updateA':
        $AlbumController->updateAlbum($params[1]);
        break;
    default: 
        $AlbumController->showError('Error en router');
        break;
}