<?php

function getConnect($servername, $database,  $username, $password) {
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    return $conn;
  } catch(PDOException $e) {
    echo "Conexion Fallida: " . $e->getMessage();
    return null;
  }
}
?>