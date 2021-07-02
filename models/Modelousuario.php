<?php

require_once('Modelo.php');

class ModeloUsuario extends Modelo {
    //recupera todos los usuarios por medio de la variable $username
    public function getUserByUsername($username) {
        $query = $this->getDb()->prepare('SELECT * FROM usuarios WHERE usuario = ?');
        $query->execute([$username]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    //hasheo de contraseña y creacion de usuario en base de datos
    public function add($user, $pass) {

        $passEnc = password_hash($pass, PASSWORD_DEFAULT);

        $query = $this->getDb()->prepare('INSERT INTO usuarios (contraseña, usuario, numeroadministrador) 
                                            VALUES (?, ?, 0)');
        $query->execute([$passEnc, $user]);

    }
    function getAll(){
        $query = $this-> getDb()->prepare('SELECT * FROM usuarios ORDER BY usuario ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}