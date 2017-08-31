<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Control Inventario</title>
        <meta name="description" content="Perspective Page View Navigation: Transforms the page in 3D to reveal a menu" />
        <meta name="keywords" content="3d page, menu, navigation, mobile, perspective, css transform, web development, web design" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="../css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/component.css" />
        <link rel="stylesheet" href="../css/typicons.css">
        <link rel="stylesheet" href="../css/sweetalert.css">
        <link rel="stylesheet" href="../css/typicons.min.css">
        <script src="../js/modernizr.custom.25376.js"></script>
        <script src="../js/jquery.min.js"></script>
        <script>
            var formita = {refresh: ''};
            setInterval(function () {
                var confirmation = $.ajax({
                    url: 'record.php',
                    type: "GET",
                    data: formita,
                    dataType: 'text',
                    success: function (text) {
                       if (text === "true") {
                            window.location.href = "close.php";
                        }
                    }
                });
            }, 300000);
        </script>
    </head>
    <body>
        <?php
        $pagina = "first.php";
        ?>
        <div id="perspective" class="perspective effect-airbnb">
            <div id="contenedor" class="container">
                <div class="wrapper" ><!-- wrapper needed for scroll -->
                    <!-- Top Navigation -->
                    <div class="codrops-top clearfixone">
                        <button id="showMenu" class="typcn typcn-th-menu" style="font-size: 24px">
                            Menu
                        </button>
                    </div>
                </div>
                <?php
                include '../controllers/defines.php';
                include '../controllers/sesionparse.php';
                $page = 0;
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 12;
                }
                switch ($page) {
                    case Enum::Inicio:
                        include'first.php';
                        break;
                    case Enum::Reparto:
                        include'second.php';
                        break;
                    case Enum::Archivos:
                        include'calendario.php';
                        break;
                    case Enum::Productos:
                        include'productos.php';
                        break;
                }
                ?>   <!-- wrapper -->
            </div><!-- /containerC -->
            <nav class="outer-nav left vertical">
                <a class="typcn typcn-th-small opciones" href="start.php?page=0">Inicio</a>
                <a  class="typcn typcn-adjust-brightness opciones" href="start.php?page=1">Reparto</a>
                <a  class="typcn typcn-document-text opciones" href="start.php?page=2">Archivos</a>
                <a  class="typcn typcn-clipboard opciones" href="start.php?page=3">Productos</a>
                <a  class="typcn typcn-cog opciones" href="start.php?page=4">Opciones</a>
                <a  class="typcn typcn-power" href="close.php">Cerrar sesion</a>
            </nav>
        </div>
        <script src="../js/classie.js"></script>
        <script src="../js/menu.js"></script>  
    </body>
</html>