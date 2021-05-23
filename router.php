<?php
  define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

  require_once('controllers/Controlalibros.php');
  require_once('controllers/Controlausuarios.php');
  
  if($_GET['action']=='')
    $_GET['action']= 'home';
  
  $urlParts = explode('/',$_GET['action']);
  $controlalibro = new Controlalibros();
  $controlausuario = new Controlausuarios();

  switch($urlParts[0]){
      case 'home':
        $controlalibro->mostrarlibros();
  }

?>