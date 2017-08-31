<?php

session_start();
if (isset($_GET["refresh"])) {
    $t = time();
    $diff = $t - $_SESSION["tiempo"];
    if ($diff > 3600) {
        echo "true";
    } else {
        echo"false";
    }
}