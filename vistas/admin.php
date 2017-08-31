<?php
session_start();
if(isset($_SESSION["usuario"])){
    if($_SESSION["usuario"]["privilegio"] == 1){
        header("location:usuario.php");
    }
}else{
   header("location:index.php"); 
}
?>
<div style="text-align: center">BIENVENDIO: <?php echo $_SESSION["usuario"]["nombre"]; ?></div>
<div style="text-align: center">HA INICIADO SESION COMO <?php
echo $_SESSION["usuario"]["privilegio"] == 0 ? 'Administrador' : 'Cliente';
?></div>
<a class="btn btn-success btn-large btn-block" href="close.php" style="cursor: pointer" >
    Cerrar sesion
</a>
