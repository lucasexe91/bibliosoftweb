<?php

include_once 'models/Modelolibro.php';
include_once 'views/Vistalibro.php';

class Controlalibros {
    private $modelolibro;
    private $vistalibro;

    function __construct(){
        $this->modelolibro = new modelolibro();
        $this->vistalibro = new vistalibro();
    }

    function mostrarlibros(){
        $libros = $this->modelolibro->getAll();
        $this->vistalibro->showAll($libros);
    }
}

?>