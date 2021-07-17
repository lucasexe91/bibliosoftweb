<?php

require_once('Modelo.php');

class ModeloComentario extends Modelo {

    //sube un comentario hecho por un usuario a la tabla "comentarios"
    function nuevocomentario($comentario, $calificacion, $idlibro, $id_usuario){
        $query = $this->getDb()->prepare('INSERT INTO comentarios (comentario, calificacion, idlibro, usuario) VALUES (?,?,?,?)');
        return $query->execute([$comentario, $calificacion, $idlibro, $id_usuario]);
    }

    //busca todos los comentarios de un libro por id
    function buscarComentariosDeLibro($idlibro){
        $query = $this->getDb()->prepare('SELECT * FROM comentarios WHERE idlibro = ?');
        $query->execute([$idlibro]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    //trae todos los comentarios
    function getAllComentarios(){
        $query = $this->getDb()->prepare('SELECT * FROM comentarios');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    //trae un comentario por id
    function getComentbyID($id){
        $query = $this->getDb()->prepare('SELECT * FROM comentarios WHERE id_comentario = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    //elimina un comentario por id
    function eliminarcomentario($id){
        $query = $this->getDb()->prepare('DELETE FROM comentarios WHERE id_comentario = ?');
        $query->execute([$id]);
    }
}