<?php
// validamos y limpiamos el campo SI SENIOR YO SOY DE CAMPO!!
function validar_campo($campo){
    $campo=trim($campo);
    $campo=  stripcslashes($campo);
    $campo=  htmlspecialchars($campo);
    return $campo;
}