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

    //muestra en el nav la sesion
    public function mostrarlogin(){
        $this->vista->mostrarlogin();
    }

    //muestra el render para registrarse
    public function mostrarregistro(){
        $this->vista->mostrarregistro();
    }

    //creacion de usuario
    public function registrar(){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $this->modelo->add($user,$pass);
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
            $userDb = $this->modelo->getUserByUsername($user);

            if (!empty($userDb) && password_verify($pass, $userDb->contraseña)) {
                AuthHelper::login($userDb);
                header('Location: ' . BASE_URL . "home");
            } else 
                $this->vista->mostrarlogin("Login incorrecto, password o usuario incorrecto");
        } else {
            $this->vista->mostrarlogin("Login incompleto");
        }
    }
}