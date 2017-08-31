<?php

include '../controllers/userController.php';
include '../helps/helps.php';
session_start();
header('Content-type: application/json');
$resultado = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["user"]) && isset($_POST["pass"])) {
        $u = validar_campo($_POST["user"]);
        $p = validar_campo($_POST["pass"]);
        $resultado = array("estado" => "true");
        if (userController::login($u, $p)) {
            $user = userController::getUser($u, $p);
            $_SESSION["usuario"] = array(
                "id" => $user->getIdusuario(),
                "nombre" => $user->getNombre() . " " . $user->getPaterno() . " " . $user->getMaterno(),
                "email" => $user->getEmail(),
                "privilegio" => $user->getPrivilegio()
            );
            $_SESSION["tiempo"] = time();
            return print(json_encode($resultado));
        }
    }
}
$resultado = array("estado" => "false");
return print(json_encode($resultado));
