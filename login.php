<html>
<style>
.alert {
    text-align: center;
    color: rgb(179, 22, 22);
}
</style>

</html>

<?php
if (!empty($_POST["btningresar"])){
    if (empty($_POST["correo1"]) and empty($_POST["contraseña1"])){
    }else{
        
        $correo=$_POST["correo1"];
        $clave=$_POST["contraseña1"];

        $sql=$conexion->query("select * from usuario where correo='$correo' and contraseña='$clave'");
        if ($datos=$sql->fetch_object()) {
            header("Location:inicio.html");
        }else{
            echo '<div class="alert">ACCESO DENEGADO</div>';

        }
    }
}
?>