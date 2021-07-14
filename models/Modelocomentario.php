<?php

require_once('Modelo.php');

class ModeloComentario extends Modelo {

    //sube un comentario hecho por un usuario a la tabla "comentarios"
    function nuevocomentario($comentario, $calificacion, $idlibro, $usuario){
        $query = $this->getDb()->prepare('INSERT INTO comentarios (comentario, calificacion, idlibro, usuario) VALUES (?,?,?,?)');
        return $query->execute([$comentario, $calificacion, $idlibro, $usuario]);
    }

    //busca todos los comentarios de un libro por id
    function buscarComentariosDeLibro($idlibro){
        $query = $this->getDb()->prepare('SELECT * FROM comentarios WHERE idlibro = ?');
        $query->execute([$idlibro]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}