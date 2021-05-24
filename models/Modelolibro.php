<?php

require_once('Modelo.php');

class modelolibro extends Modelo {
    function getAll(){
        $query = $this-> getDb()->prepare('SELECT * FROM libros');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function get($id){
        $query = $this-> getDb()->prepare('SELECT * FROM libros WHERE id = ?');
        $query->execute([$id]);
        echo 'console.log('. json_encode($query->fetch(PDO::FETCH_OBJ)).')';
        return $query->fetch(PDO::FETCH_OBJ);
    }

}

class modeloCategorias extends Modelo {
    function getAll(){
        $query = $this-> getDb()->prepare('SELECT * FROM categorias');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }    
}
?>