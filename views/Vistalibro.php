<?php
require_once('Visor.php');
include_once('helpers/auth.helper.php');

class vistalibro extends Visor{

    public function __construct(){
        parent::__construct();
        $authHelper = new AuthHelper();
        $username = $authHelper->getLoggedUserName();
        $this->getSmarty()->assign('username', $username);
    }

    function showAll($libros,$categorias){
        $this->getSmarty()->assign('listalibros', $libros);
        $this->getSmarty()->assign('listacategorias', $categorias);
        $this->getSmarty()->display('templates/tarjetas.tpl');
    }

    function showFiltrado($libros,$categorias){
        $this->getSmarty()->assign('listalibros', $libros);
        $this->getSmarty()->assign('listacategorias', $categorias);
        $this->getSmarty()->display('templates/tarjetas.tpl');
    }

    function showlibro($libroAver,$categorias){
        $this->getSmarty()->assign('unlibro', $libroAver);
        $this->getSmarty()->assign('unacategoria', $categorias);
        $this->getSmarty()->display('templates/verlibro.tpl');
    }
}