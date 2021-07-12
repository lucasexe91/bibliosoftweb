<?php

require_once('Modelo.php');

class ModeloComentario extends Modelo {

    function nuevocomentario($comentario, $calificacion, $idlibro, $usuario){
        $query = $this->getDb()->prepare('INSERT INTO comentarios (comentario, calificacion, idlibro, usuario) VALUES (?,?,?,?)');
        return $query->execute([$comentario, $calificacion, $idlibro, $usuario]);
    }

}