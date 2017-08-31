<?php
session_start();
if (isset($_SESSION["usuario"])) {
    header("location:start.php");
}
?>
<!DOCTYPE html>
<html oncontextmenu="return false">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="../css/login.css?v=<?php echo date("h:i:sa"); ?>"/>
        <link rel="stylesheet" href="../css/style.css?v=<?php echo date("h:i:sa"); ?>"/>
        <link rel="stylesheet" href="../css/sweetalert.css?v=<?php echo date("h:i:sa"); ?>"/>
        <link rel="stylesheet" href="../css/font-awesome.min.css?v=<?php echo date("h:i:sa"); ?>" />
        <style type="text/css">
            .progress {
                display: block;
                text-align: center;
                width: 0;
                height: 10px;
                background: #313fae;
                transition: width .3s;
                z-index: 3;
                position: fixed;
                top: 0;
                left: 0;
            }

            .progress.hide {
                opacity: 0;
                transition: opacity 1.3s;
            }
        </style>
        <title>Tienda Orli</title>
    </head>
    <body class="align" style="
          -moz-user-select: none; 
          -webkit-user-select: none; 
          -ms-user-select:none; 
          user-select:none;
          -o-user-select:none;
          vertical-align: middle;" 
          unselectable="on"
          onselectstart="return false;" >

        <div class="progress"></div>
        <div class="inset-text-effect">Control Inventarios</div>



        <br><br><br>
        <div class="grid">
            <div class="app-title">
                <h1>Iniciar sesion</h1>
            </div>
            <form onsubmit="ajaxPlease(event)" id="theForm" class="form login">
                <div class="form__field">
                    <label for="login__username"><i class="fa fa-user icon" style="color:#272525" aria-hidden="true"></i><span class="hidden">Username</span></label>
                    <input id="login__username" type="text" name="u" class="form__input" placeholder="Usuario" required>
                </div>
                <div class="form__field">
                    <label for="login__password"><i class="fa fa-lock icon" style="color:#272525" aria-hidden="true"></i><span class="hidden">Password</span></label>
                    <input id="login__password" type="password" name="p" class="form__input" placeholder="Constraseña" required>
                </div>
                <div class="form__field">
                    <input type="submit" value="iniciar sesion">
                </div>
            </form>
            <p class="text--center"><a href="#">Olvidaste tu constraseña?</a><i class="fa fa-arrow-right icon" aria-hidden="true"></i></p>
        </div>
        <hr style="display: block;
            height: 1px;
            max-width: 320px;
            max-width: 20rem;
            border: 0;
            border-top: 1px solid #eee;
            width: 90%;
            padding: 0; ">
        <footer>
            <p>&copy; <?php echo date("Y"); ?> - Wings DevOps Inc.</p>
        </footer>

        <script src="../js/sweetalert.min.js"></script>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/app.js"></script>
        <script language="javascript">
                document.onmousedown = disableclick;
                status = "Right Click Disabled";
                function disableclick(event)
                {
                    return event.button == 2 ? false : true;
                }
        </script>
    </body>
</html>