<?php
include_once('models/album.model.php');
include_once('views/album.view.php');

class AlbumController{
    private $model;
    private $view;
    public function __construct(){
        $this->model = new AlbumModel();
        $this->view = new AlbumView();
    }
    public function serveAllAlbums(){
        $albums=$this->model->getAllAlbums();
        if(!empty($albums)){
            $this->view->showAllAlbums($albums);
        }
        else{
            $this->view->showError('error al obtener albums');
        }
    }
    public function home(){
        $this->view->showHome();
    }
}