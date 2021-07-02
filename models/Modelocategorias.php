<?php

require_once('Modelo.php');

class modeloCategorias extends Modelo {
    //recupera todas las categorias
    function getAll(){
        $query = $this-> getDb()->prepare('SELECT * FROM categorias ORDER BY nombre ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
    //recupera la categoria por id
    function getcategoria($id){
        $query = $this-> getDb()->prepare('SELECT * FROM categorias WHERE id_categoria = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    //borra una categoria por id
    function delete($id){
        $query = $this->getDb()->prepare('DELETE FROM categorias WHERE id_categoria = ?');
        $query->execute([$id]);
    }

    //crea una categoria
    function crearcategoria($nombre){
        $query = $this->getDb()->prepare( 'INSERT INTO categorias (nombre) VALUES(?)');
        $query->execute([$nombre]);
    }

    //guarda los cambios en la categoria
    function guardarCambiosCategoria($id,$nombre){
        $query = $this-> getDb()->prepare('UPDATE categorias SET nombre = ? WHERE id_categoria = ?');
        $query->execute([$nombre,$id]);
    }
}
?>