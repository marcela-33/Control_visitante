<?php
//Validar datos del servidor 
$server = "localhost";
$user = "root";
$pass = "";
$db = "controlvisitantes";
//Conectar a la base de datos
$conexion = mysqli_connect($server, $user, $pass, $db);
$conexion->set_charset("utf8");
?>