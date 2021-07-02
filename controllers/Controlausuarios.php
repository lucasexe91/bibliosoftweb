<?php

include_once('views/Vistausuario.php');
include_once('models/Modelousuario.php');
include_once('models/Modelocategorias.php');

class Controlausuario{
    private $modelousuario;
    private $vistausuario;
    private $modelocategoria;

    public function __construct(){
        $this->modelousuario = new ModeloUsuario();
        $this->modelocategoria = new modeloCategorias();
        $this->vistausuario = new VistaUsuario();
    }

    //muestra en el nav la sesion
    public function mostrarlogin(){
        $this->vistausuario->mostrarlogin();
    }

    //muestra el render para registrarse
    public function mostrarregistro(){
        $this->vistausuario->mostrarregistro();
    }

    //creacion de usuario
    public function registrar(){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $this->modelousuario->add($user,$pass);
        $this->verify();
    }

    //cierra sesion
    public function logout(){
        AuthHelper::logout();
        header("Location: " . BASE_URL . 'home');
    }

    //verificacion de contraseña y usuario
    public function verify() {
        if(!empty($_POST['username']) && !empty($_POST['password'])) {
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $userDb = $this->modelousuario->getUserByUsername($user);

            if (!empty($userDb) && password_verify($pass, $userDb->contraseña)) {
                AuthHelper::login($userDb);
                header('Location: ' . BASE_URL . "home");
            } else 
                $this->vistausuario->mostrarlogin("Login incorrecto, password o usuario incorrecto");
        } else {
            $this->vistausuario->mostrarlogin("Login incompleto");
        }
    }
    function muestrausuarios(){
        $categorias = $this->modelocategoria->getAll();
        $listausuarios = $this->modelousuario->getAll();
        $this->vistausuario->showadministrarusuarios($listausuarios,$categorias);
    }
}