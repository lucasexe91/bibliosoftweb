<?php

include_once 'models/Modelolibro.php';
include_once 'views/Vistalibro.php';
include_once 'models/Modelousuario.php';

class Controlalibros {
    private $modelolibro;
    private $vistalibro;

    function __construct(){
        $this->modelolibro = new modelolibro();
        $this->vistalibro = new vistalibro();
        $this->modeloCategorias = new modeloCategorias();
        $this->modelousuario = new ModeloUsuario();
    }

    function mostrarlibros(){
        $libros = $this->modelolibro->getAll();
        $categorias = $this->modeloCategorias->getAll();
        $this->vistalibro->showAll($libros,$categorias);
    }

    function filtrarlibros($id){
        $libros = $this->modelolibro->getFiltrado($id);
        $categorias = $this->modeloCategorias->getAll();
        $this->vistalibro->showFiltrado($libros,$categorias);
    }

    function muestralibro($id){
        $libroAver = $this->modelolibro->get($id);
        $categorias = $this->modeloCategorias->getcategoria($libroAver->categoria);
        $this->vistalibro->showlibro($libroAver,$categorias);
    }

    function editarlibro($id){
        $libroAver = $this->modelolibro->get($id);
        $listacategorias = $this->modeloCategorias->getAll();
        $estacategoria = $this->modeloCategorias->getcategoria($libroAver->categoria);
        $this->vistalibro->showEditarlibro($libroAver,$listacategorias,$estacategoria);
    }
    
    function guardarlibro($id){ 
        $nombre = $_POST['nombre'];
        $autor = $_POST['autor'];
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];
        $imagen = $_POST['imagen'];
        $this->modelolibro->guardar($id,$nombre,$autor,$categoria,$descripcion,$imagen);
        header("Location: " . BASE_URL . 'home');
    }

    function borrarlibro($id){
        $this->modelolibro->delete($id);
        header("Location: " . BASE_URL . 'home');
    }

    function guardarlibronuevo(){
        $nombre = $_POST['nombre'];
        $autor = $_POST['autor'];
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];
        $imagen = $_POST['imagen'];
        $this->modelolibro->crearlibro($nombre,$autor,$categoria,$descripcion,$imagen);
        header("Location: " . BASE_URL . 'home');
    }

    function crearlibronuevo(){
        $listacategorias = $this->modeloCategorias->getAll();
        $this->vistalibro->showCrearlibro($listacategorias);
    }

    function administrarCategorias(){
        $listacategorias = $this->modeloCategorias->getAll();
        $this->vistalibro->showAdministrarCategorias($listacategorias);
    }

    function borrarcategoria($id){
        $this->modeloCategorias->delete($id);
        header("Location: " . BASE_URL . 'home');
    }

}

?>