<?php

require_once('Visor.php');

class VistaUsuario extends Visor {

    public function __construct() {
        parent::__construct();
        $authHelper = new AuthHelper();
        $username = $authHelper->getLoggedUserName();
        $admin = $authHelper->adminStatus();
        $this->getSmarty()->assign('admin',$admin);
        $this->getSmarty()->assign('username', $username);
    }

    //render de logeo
    public function mostrarlogin($error=null) {
        $this->getSmarty()->assign('title', "Login");
        $this->getSmarty()->assign('error', $error);        
        $this->getSmarty()->assign('home', BASE_URL.'home');
        $this->getSmarty()->display('templates/login.tpl');
    }

    //render de formulario de registro
    public function mostrarregistro($error=null) {
        $this->getSmarty()->assign('title', "Login");
        $this->getSmarty()->assign('error', $error);        
        $this->getSmarty()->assign('home', BASE_URL.'home');
        $this->getSmarty()->display('templates/registro.tpl');
    }
    public function showadministrarusuarios($listausuarios, $categorias){
        $this->getSmarty()->assign('listausuarios', $listausuarios);
        $this->getSmarty()->assign('listacategorias',$categorias);
        $this->getSmarty()->display('templates/administrarusuarios.tpl');
    }   
}