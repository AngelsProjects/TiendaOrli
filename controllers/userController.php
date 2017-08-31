<?php

include '../BD/userDAO.php';

class userController {

    public static function login($usercon, $passcon) {
        $objeto_usuario = new user();
        $objeto_usuario->setIdusuario($usercon);
        $objeto_usuario->setPassword($passcon);
        return userDAO::login($objeto_usuario);
    }
    public function getUser($user,$pass){
        $objeto_usuario = new user();
        $objeto_usuario->setIdusuario($user);
        $objeto_usuario->setPassword($pass);
        return userDAO::getUser($objeto_usuario);
    }
}
