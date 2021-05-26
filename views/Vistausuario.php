<?php

require_once('Visor.php');

class VistaUsuario extends Visor {

    public function __construct() {
        parent::__construct();
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
}