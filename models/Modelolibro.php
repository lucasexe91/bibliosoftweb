<?php

require_once('Modelo.php');

class modelolibro extends Modelo {
    function getAll(){
        $query = $this-> getDb()->prepare('SELECT * FROM libros');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }


    //recupera el libro por id
    function get($id){
        $query = $this-> getDb()->prepare('SELECT * FROM libros WHERE id_libro = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    //recupera todos los libros de misma categoria por id
    function getFiltrado($id){
        $query = $this-> getDb()->prepare('SELECT * FROM libros WHERE categoria = ?');
        $query->execute([$id]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    //guarda cambios en libros
    function guardar($id,$nombre,$autor,$categoria,$descripcion,$imagen){
        $query = $this-> getDb()->prepare('UPDATE libros SET nombre = ?, autor = ?, categoria = ?, descripcion = ?, imagen = ? WHERE id_libro = ?');
        $query->execute([$nombre,$autor,$categoria,$descripcion,$imagen,$id]);
    }

    //borra un libro por id
    function delete($id){
        $query = $this->getDb()->prepare('DELETE FROM libros WHERE id_libro = ?');
        $query->execute([$id]);
    }

    //crea un nuevo libro en la base de datos
    function crearlibro($nombre,$autor,$categoria,$descripcion,$imagen){
        $query = $this->getDb()->prepare( 'INSERT INTO libros (nombre, autor, categoria, descripcion, imagen) VALUES(?,?,?,?,?)');
        $query->execute([$nombre,$autor,$categoria,$descripcion,$imagen]);
    }

}

class modeloCategorias extends Modelo {
    //recupera todas las categorias
    function getAll(){
        $query = $this-> getDb()->prepare('SELECT * FROM categorias');
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

}
?>