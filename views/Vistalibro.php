<?php
require_once('Visor.php');
include_once('helpers/auth.helper.php');

class vistalibro extends Visor{

    public function __construct(){
        parent::__construct();
        $authHelper = new AuthHelper();
        $username = $authHelper->getLoggedUserName();
        $admin = $authHelper->adminStatus();
        $this->getSmarty()->assign('admin',$admin);
        $this->getSmarty()->assign('username', $username);
    }

    //muestra todos los libros y sus categorias
    function showAll($libros,$categorias){
        $this->getSmarty()->assign('listalibros', $libros);
        $this->getSmarty()->assign('listacategorias', $categorias);
        $this->getSmarty()->display('templates/tarjetas.tpl');
    }

    //filtra libros por categorias
    function showFiltrado($libros,$categorias){
        $this->getSmarty()->assign('listalibros', $libros);
        $this->getSmarty()->assign('listacategorias', $categorias);
        $this->getSmarty()->display('templates/tarjetas.tpl');
    }

    //muestra un libro especifico
    function showlibro($libroAver,$categorias){
        $this->getSmarty()->assign('unlibro', $libroAver);
        $this->getSmarty()->assign('unacategoria', $categorias);
        $this->getSmarty()->display('templates/verlibro.tpl');
    }

    //muestra formulario de edicion de libro
    function showEditarlibro($libroAver,$listacategorias,$estacategoria){
        $this->getSmarty()->assign('unlibro', $libroAver);
        $this->getSmarty()->assign('estacategoria', $estacategoria);
        $this->getSmarty()->assign('listacategorias', $listacategorias);
        $this->getSmarty()->display('templates/editarlibro.tpl');
    }

    //muestra formulario de creacion de libro
    function showCrearlibro($listacategorias){
        $this->getSmarty()->assign('listacategorias',$listacategorias);
        $this->getSmarty()->display('templates/crearlibro.tpl');
    }

    //muestra categorias y botones de edicion
    function showAdministrarCategorias($listacategorias){
        $this->getSmarty()->assign('listacategorias',$listacategorias);
        $this->getSmarty()->display('templates/editarcategorias.tpl');
    }
}