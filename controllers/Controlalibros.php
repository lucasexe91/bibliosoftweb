<?php

include_once 'models/Modelolibro.php';
include_once 'views/Vistalibro.php';

class Controlalibros {
    private $modelolibro;
    private $vistalibro;

    function __construct(){
        $this->modelolibro = new modelolibro();
        $this->vistalibro = new vistalibro();
        $this->modeloCategorias = new modeloCategorias();
    }

    function mostrarlibros(){
        $libros = $this->modelolibro->getAll();
        $categorias = $this->modeloCategorias->getAll();
        $this->vistalibro->showAll($libros,$categorias);
    }

    function muestralibro($id){
        $libroAver = $this->modelolibro->get($id);
        $this->vistalibro->showlibro($libroAver);
    }
}

?>