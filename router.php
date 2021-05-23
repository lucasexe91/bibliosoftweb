<?php
  define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

  require_once('controllers/Controlalibros.php');
  require_once('controllers/Controlausuarios.php');
  
  if($_GET['action']=='')
    $_GET['action']= 'home';
  
  $urlParts = explode('/',$_GET['action']);
  $controlalibro = new Controlalibros();
  $controlausuario = new Controlausuario();

  switch($urlParts[0]){
      case 'home':
        $controlalibro->mostrarlibros();
        break;
      case 'login':
        $controlausuario->mostrarlogin();
        break;
      case 'registro':
        $controlausuario->mostrarregistro();
        break;
  }

?>