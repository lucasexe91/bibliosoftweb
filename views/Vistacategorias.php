<?php
require_once('Visor.php');
include_once('helpers/auth.helper.php');

class vistacategorias extends Visor{

    public function __construct(){
        parent::__construct();
        $authHelper = new AuthHelper();
        $username = $authHelper->getLoggedUserName();
        $admin = $authHelper->adminStatus();
        $this->getSmarty()->assign('admin',$admin);
        $this->getSmarty()->assign('username', $username);
    }

    //muestra categorias y botones de edicion
    function showAdministrarCategorias($listacategorias){
        $this->getSmarty()->assign('listacategorias',$listacategorias);
        $this->getSmarty()->display('templates/editarcategorias.tpl');
    }

    //muestra el formulario de agregar una categoria
    function vistaAgregarCategoria(){
        $this->getSmarty()->display('crearCategoria.tpl');
    }

    function vistaEditarUnaCategoria($categoriaAeditar){
        $this->getSmarty()->assign('datoscategoria',$categoriaAeditar);
        $this->getSmarty()->display('templates/editarUnaCategoria.tpl');
    }

}
?>