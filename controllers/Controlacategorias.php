<?php

include_once 'models/Modelocategorias.php';
include_once 'views/Vistacategorias.php';

class Controlacategorias {
    private $modelocategorias;
    private $vistacategorias;


    //crea nuevas instancias de modelos y vistas
    function __construct(){
        $this->vistacategorias = new vistacategorias();
        $this->modeloCategorias = new modelocategorias();
    }

    function administrarCategorias(){
        $listacategorias = $this->modeloCategorias->getAll();
        $this->vistacategorias->showAdministrarCategorias($listacategorias);
    }

    //borra una categoria por id
    function borrarcategoria($id){
        $this->modeloCategorias->delete($id);
        header("Location: " . BASE_URL . 'home');
    }

    //formulario de agregar una categoria
    function agregarCategoria(){
        $this->vistacategorias->vistaAgregarCategoria();
    }

    //guarda una nueva categoria
    function guardarcategorianueva(){
        $nombre = $_POST['nombre'];
        print_r($nombre);
        $this->modeloCategorias->crearcategoria($nombre);
        header("Location: " . BASE_URL . 'home');
    }

    function editarUnaCategoria($id){
        $categoriaAeditar = $this->modeloCategorias->getcategoria($id);
        $this->vistacategorias->vistaEditarUnaCategoria($categoriaAeditar);
    }

    function guardarcambioscategoria($id){
        $nombre = $_POST['nombre'];
        $this->modeloCategorias->guardarCambiosCategoria($id,$nombre);
         header("Location: " . BASE_URL . 'administrarCategorias');
    }
}

?>