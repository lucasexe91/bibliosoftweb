<?php

include_once('views/Vistausuario.php');
include_once('models/Modelousuario.php');

class Controlausuario{
    private $modelo;
    private $vista;

    public function __construct(){
        $this->$modelo = new ModeloUsuario();
        $this->$vista = new VistaUsuario();
        
    }
    public function mostrarlogin(){
        $this->vista->mostrarlogin();
    }
    public function mostrarregistro(){
        $this->vista->mostrarregistro();
    }
}