<?php

require_once('Modelo.php');

class modelolibro extends Modelo {
    function getAll(){
        $query = $this-> getDb()->prepare('SELECT * FROM libros');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function get($id){
        $query = $this-> getDb()->prepare('SELECT * FROM libros WHERE id_libro = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function getFiltrado($id){
        $query = $this-> getDb()->prepare('SELECT * FROM libros WHERE categoria = ?');
        $query->execute([$id]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function guardar($id,$nombre,$autor,$categoria,$descripcion,$imagen){
        $query = $this-> getDb()->prepare('UPDATE libros SET nombre = ?, autor = ?, categoria = ?, descripcion = ?, imagen = ? WHERE id_libro = ?');
        $query->execute([$nombre,$autor,$categoria,$descripcion,$imagen,$id]);
    }

    function delete($id){
        $query = $this->getDb()->prepare('DELETE FROM libros WHERE id_libro = ?');
        $query->execute([$id]);
    }

    function crearlibro($nombre,$autor,$categoria,$descripcion,$imagen){
        $query = $this->getDb()->prepare( 'INSERT INTO libros (nombre, autor, categoria, descripcion, imagen) VALUES(?,?,?,?,?)');
        $query->execute([$nombre,$autor,$categoria,$descripcion,$imagen]);
    }

}

class modeloCategorias extends Modelo {
    function getAll(){
        $query = $this-> getDb()->prepare('SELECT * FROM categorias');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
    function getcategoria($id){
        $query = $this-> getDb()->prepare('SELECT * FROM categorias WHERE id_categoria = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function delete($id){
        $query = $this->getDb()->prepare('DELETE FROM categorias WHERE id_categoria = ?');
        $query->execute([$id]);
    }

}
?>