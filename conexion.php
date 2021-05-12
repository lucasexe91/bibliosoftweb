<?php
$contraseña = "";
$usuario = "";
$nombreBD = "tpeweb2";
$rutaservidor = "localhost";

try{
    $base_de_datos = new PDO("sqlsrv:server=$rutaservidor;database=$nombreBD", $usuario,$contraseña);
    $base_de_datos -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conectado";
}catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}

?>