<?php
  define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

  require_once('controllers/Controlalibros.php');
  require_once('controllers/Controlausuarios.php');
  require_once('controllers/Controlacategorias.php');
  
  if($_GET['action']=='')
    $_GET['action']= 'home';
  
  $urlParts = explode('/',$_GET['action']);
  $controlalibro = new Controlalibros();
  $controlausuario = new Controlausuario();
  $controlacategorias = new Controlacategorias();

  switch($urlParts[0]){
      case 'home':
        $controlalibro->mostrarlibros();
        break;
      case 'login':
        $controlausuario->mostrarlogin();
        break;
      case 'verify':
        $controlausuario->verify();
        break;
      case 'registro':
        $controlausuario->mostrarregistro();
        break;
      case 'registrar':
        $controlausuario->registrar();
        break;
      case "filtrado":
        $controlalibro->filtrarlibros($urlParts[1]);
        break;
      case "verlibro":
        $controlalibro->muestralibro($urlParts[1]);
        break;
      case "editarlibro":
        $controlalibro->editarlibro($urlParts[1]);
        break;
      case "guardarlibro": 
        $controlalibro->guardarlibro($urlParts[1]);
        break;
      case "logout":
        $controlausuario->logout();
        break;
      case "borrarLibro":
        $controlalibro->borrarlibro($urlParts[1]);
        break;
      case "guardarlibronuevo":
        $controlalibro->guardarlibronuevo();
        break;
      case "crearlibronuevo":
        $controlalibro->crearlibronuevo();
        break;
      case "administrarCategorias":
        $controlacategorias->administrarCategorias();
        break;
      case "agregarcategoria":
        $controlacategorias->agregarCategoria();
        break;
      case "crearcategorianueva":
        $controlacategorias->guardarcategorianueva();
        break;
      case "editarcategoria":
        $controlacategorias->editarUnaCategoria($urlParts[1]);
        break;
      case "guardarcambioscategoria":
        $controlacategorias->guardarcambioscategoria($urlParts[1]);
        break;
      case "borrarcategoria":
        $controlacategorias->borrarcategoria($urlParts[1]);
        break;
      case "buscartitulo":
        $controlacategorias->buscatitulo();
        break;
      case "administrarusuarios":
        $controlausuario->muestrausuarios();
        break;
      default:
        echo '<h1> Error 404 :´c </h1>';
        break;
  }

?>