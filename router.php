<?php
    require_once('smarty/libs/Smarty.class.php');
    include_once("conexion.php");
    include_once("config.php");

    $smarty = new Smarty();

  try {
    $conn = getConnect($servername, $database,  $username, $password);
    // Armo mi sentencia SQL
    $sql = 'SELECT * FROM producto';
    // Preparo la sentencia:
    $sth = $conn->prepare($sql);
    // Ejecuto la sentencia
    $sth->execute();
    // Recupero el resultado
    $libros = $sth->fetchAll();   
    // Muestro el resultado
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  try {
    $conn = getConnect($servername, $database,  $username, $password);
    // Armo mi sentencia SQL
    $sql = 'SELECT * FROM categoria';
    // Preparo la sentencia:
    $sth = $conn->prepare($sql);
    // Ejecuto la sentencia
    $sth->execute();
    // Recupero el resultado
    $categorias = $sth->fetchAll();   
    // Muestro el resultado
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  function showHome($libros , $categorias){
        $smarty = new Smarty();
        $smarty -> assign( 'arraylibro', $libros);
        $smarty -> assign( 'arraycategoria', $categorias);
        $smarty -> display('templates/home.tpl');
  }
  showHome($libros,$categorias);
?>