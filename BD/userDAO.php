<?php

include "conexion.php";
include '../entidades/user.php';

class userDAO extends conexion {

    protected static $coneccion;

    public static function getconexion() {
        self::$coneccion = conexion::conectar();
    }

    public static function getotrabd() {
        self::$coneccion = conexion::otrabd();
    }

    private static function desconectar() {
        self::$coneccion = null;
    }

    /*
     * Metodo que sirve para obtener un usuario
     * @param   object  $user
     * @return  object
     */

    public static function login($user) {
        $query = "select * from usuarios where idusuario = :idusuario and contrasena= :contrasena";
        self::getconexion();
        $resultado = self::$coneccion->prepare($query);
        $resultado->bindParam(":idusuario", $user->getIdusuario());
        $resultado->bindParam(":contrasena", $user->getPassword());
        $resultado->execute();
        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetch();
            if ($filas["idusuario"] == $user->getIdusuario() && $filas["contrasena"] == $user->getPassword()) {
                return true;
            }
        }
        self::desconectar();
        return false;
    }

    public static function getUser($user) {
        $query = "select * from usuarios where idusuario = :idusuario and contrasena= :contrasena";
        self::getconexion();
        $resultado = self::$coneccion->prepare($query);
        $resultado->bindParam(":idusuario", $user->getIdusuario());
        $resultado->bindParam(":contrasena", $user->getPassword());
        $resultado->execute();
        $filas = $resultado->fetch();
        $user = new user();
        $user->setIdusuario($filas["idusuario"]);
        $user->setNombre($filas["nombres"]);
        $user->setPaterno($filas["paterno"]);
        $user->setMaterno($filas["materno"]);
        $user->setEmail($filas["correo"]);
        $user->setPassword($filas["contrasena"]);
        $user->setPrivilegio($filas["privilegio"]);
        $user->setFecha_registro($filas["fecha_registro"]);
        self::desconectar();
        return $user;
    }

    public static function consultar() {
        $query = 'select noControl, concat(nombre," ",apellido) as nombre from alumnos';
        self::getotrabd();
        $resultado = self::$coneccion->prepare($query);
        $resultado->execute();
        while ($row = $resultado->fetch()) {
            echo"</br>";
            echo $row['noControl'] . "       " . $row['nombre'];
        }
        self::desconectar();
    }

}
