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
    
    //recupera el libro por titulo
    function gettitulo($titulo){
        $query = $this-> getDb()->prepare('SELECT * FROM libros WHERE nombre = ?');
        $query->execute([$titulo]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    //recupera todos los libros de misma categoria por id
    function getFiltrado($id){
        $query = $this-> getDb()->prepare('SELECT * FROM libros WHERE categoria = ?');
        $query->execute([$id]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    //guarda cambios en libros
    function guardar($id,$nombre,$autor,$categoria,$descripcion,$image = NULL){
        $pathImg = null;
        if ($image)
            $pathImg = $this->uploadImage($image);

        $query = $this-> getDb()->prepare('UPDATE libros SET nombre = ?, autor = ?, categoria = ?, descripcion = ?, imagen = ? WHERE id_libro = ?');
        $query->execute([$nombre,$autor,$categoria,$descripcion,$pathImg,$id]);
    }

    //borra un libro por id
    function delete($id){
        $query = $this->getDb()->prepare('DELETE FROM libros WHERE id_libro = ?');
        $query->execute([$id]);
    }

    //crea un nuevo libro en la base de datos
    function crearlibro($nombre,$autor,$categoria,$descripcion,$image = NULL){
        $pathImg = null;
        if ($image)
            $pathImg = $this->uploadImage($image);

        $query = $this->getDb()->prepare( 'INSERT INTO libros (nombre, autor, categoria, descripcion, imagen) VALUES(?,?,?,?,?)');
        $query->execute([$nombre,$autor,$categoria,$descripcion,$pathImg]);
    }

    //carga imagen al servidor y retorna su URL
    function uploadImage($image) {
        $target = 'images/' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;
    }
}
?>