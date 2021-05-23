<?php

require_once('Modelo.php');

class modelolibro extends Modelo {
    function getAll(){
        $query = $this-> getDb()->prepare('SELECT * FROM libros ORDER BY priority ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}




?>