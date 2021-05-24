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
        //$this->getSmarty()->assign('home', BASE_URL.'libros');
        $this->getSmarty()->display('templates/tarjetas.tpl');
    }

    function showlibro($libroAver){
        $this->getSmarty()->assign('unlibro', $libroAver);
        $this->getSmarty()->display('templates/verlibro.tpl');
    }
}