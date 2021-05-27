<?php

include_once 'models/Modelolibro.php';
include_once 'views/Vistalibro.php';
include_once 'models/Modelousuario.php';

class Controlalibros {
    private $modelolibro;
    private $vistalibro;


    //crea nuevas instancias de modelos y vistas
    function __construct(){
        $this->modelolibro = new modelolibro();
        $this->vistalibro = new vistalibro();
        $this->modeloCategorias = new modeloCategorias();
        $this->modelousuario = new ModeloUsuario();
    }

    //arma las tarjetas de "home"
    function mostrarlibros(){
        $libros = $this->modelolibro->getAll();
        $categorias = $this->modeloCategorias->getAll();
        $this->vistalibro->showAll($libros,$categorias);
    }

    //filtra el libro por las categorias
    function filtrarlibros($id){
        $libros = $this->modelolibro->getFiltrado($id);
        $categorias = $this->modeloCategorias->getAll();
        $this->vistalibro->showFiltrado($libros,$categorias);
    }

    //tarjeta especifica del libro "ver el libro"
    function muestralibro($id){
        $libroAver = $this->modelolibro->get($id);
        $categorias = $this->modeloCategorias->getcategoria($libroAver->categoria);
        $this->vistalibro->showlibro($libroAver,$categorias);
    }

    //funcion para editar libros
    function editarlibro($id){
        $libroAver = $this->modelolibro->get($id);
        $listacategorias = $this->modeloCategorias->getAll();
        $estacategoria = $this->modeloCategorias->getcategoria($libroAver->categoria);
        $this->vistalibro->showEditarlibro($libroAver,$listacategorias,$estacategoria);
    }
    
    //guarda los cambios a un libro
    function guardarlibro($id){ 
        $nombre = $_POST['nombre'];
        $autor = $_POST['autor'];
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];
        $imagen = $_POST['imagen'];
        $this->modelolibro->guardar($id,$nombre,$autor,$categoria,$descripcion,$imagen);
        header("Location: " . BASE_URL . 'home');
    }

    //borra el libro por id
    function borrarlibro($id){
        $this->modelolibro->delete($id);
        header("Location: " . BASE_URL . 'home');
    }

    //guarda un libro nuevo
    function guardarlibronuevo(){
        $nombre = $_POST['nombre'];
        $autor = $_POST['autor'];
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];
        $imagen = $_POST['imagen'];
        $this->modelolibro->crearlibro($nombre,$autor,$categoria,$descripcion,$imagen);
        header("Location: " . BASE_URL . 'home');
    }

    //formulario de creacion de libro
    function crearlibronuevo(){
        $listacategorias = $this->modeloCategorias->getAll();
        $this->vistalibro->showCrearlibro($listacategorias);
    }

    //edicion de categorias
    function administrarCategorias(){
        $listacategorias = $this->modeloCategorias->getAll();
        $this->vistalibro->showAdministrarCategorias($listacategorias);
    }

    //borra una categoria por id
    function borrarcategoria($id){
        $this->modeloCategorias->delete($id);
        header("Location: " . BASE_URL . 'home');
    }

    //formulario de agregar una categoria
    function agregarCategoria(){
        $this->vistalibro->vistaAgregarCategoria();
    }

    //guarda una nueva categoria
    function guardarcategorianueva(){
        $nombre = $_POST['nombre'];
        print_r($nombre);
        $this->modeloCategorias->crearcategoria($nombre);
        header("Location: " . BASE_URL . 'home');
    }

}

?>