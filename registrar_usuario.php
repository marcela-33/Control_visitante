<html>
<style>
.sesion {
    text-align: center;
    color: rgb(49, 92, 40);
}
</style>

</html>
<?php
if(!empty($_POST["Nuevo"])){
    if (empty($_POST["nombre"]) or empty($_POST["correo"]) or empty($_POST["contraseña"])){
        
    }else{
        $nombre=$_POST["nombre"];
        $correo=$_POST["correo"];
        //Se encripta la contraseña con md5 para que no sea visualizada desde la base de datos
        $contraseña=md5($_POST["contraseña"]);

        $sql=$conexion->query("insert into usuario(nombre,correo,contraseña)
            values('$nombre','$correo','$contraseña') ");
        if ($sql==1) {
            echo '<div class="sesion">Usuario registrado correctamente</div>';
        } else {
            echo '<div class="success">ERROR!!!</div>';
        }
        
        
    }
}
?>