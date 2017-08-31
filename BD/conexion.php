<?php

class conexion {

    public static function conectar() {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=inventariot", "root", "");
            return $conn;
        } catch (PDOException $ex) {
            die("No se pudo conectar debido al siguiente error: " . $ex->getMessage());
        }
    }

    public static function otrabd() {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=concursoprogramacion", "root", "");
            return $conn;
        } catch (PDOException $ex) {
            die("No se pudo conectar debido al siguiente error: " . $ex->getMessage());
        }
    }

}
