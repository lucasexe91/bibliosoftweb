<?php

require_once('Modelo.php');

class ModeloUsuario extends Modelo {
    public function getUserByUsername($username) {
        $query = $this->getDb()->prepare('SELECT * FROM usuarios WHERE usuario = ?');
        $query->execute([$username]);
        return $query->fetch(PDO::FETCH_OBJ);
    }


    public function add($user, $pass, $admin) {

        $passEnc = password_hash($pass, PASSWORD_DEFAULT);

        $query = $this->getDb()->prepare('INSERT INTO usuarios (contraseña, usuario, numeroadministrador) 
                                            VALUES (?, ?, ?)');
        $query->execute([$passEnc, $user, $admin]);

    }
}