<?php

include_once('views/Vistausuario.php');
include_once('models/Modelousuario.php');

class Controlausuario{
    private $modelo;
    private $vista;

    public function __construct(){
        $this->modelo = new ModeloUsuario();
        $this->vista = new VistaUsuario();
        
    }
    public function mostrarlogin(){
        $this->vista->mostrarlogin();
    }

    public function mostrarregistro(){
        $this->vista->mostrarregistro();
    }

    public function registrar(){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $admin = $_POST['admin'];
        $this->modelo->add($user,$pass,$admin);
        header("Location: " . BASE_URL . 'home');
    }
}