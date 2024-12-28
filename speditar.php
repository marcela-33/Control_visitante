<?php
$ID= $_POST['ID'];
$fecha=$_POST['date'];
$documento=$_POST['document'];
$nombre=$_POST['name'];
$apellido=$_POST['apellido'];
$visita=$_POST['visita'];
$equipo=$_POST['equipo'];
$motivo=$_POST['motivo'];
$contacto=$_POST['contacto'];
$Fecha_salida=$_POST['Fecha_salida'];

$conexion = mysqli_connect("localhost", "root", "", "controlvisitantes");
$sql = "UPDATE visitantes set fecha_ingreso='$fecha' documento_visitante='$documento', nombre_visitante='$nombre' apellido_visitante='$apellido' a_quien_visita='$visita' ingresa_equipo='$equipo' motivo_visita='$motivo' telefono_contacto='$contacto', Fecha_salida='$Fecha_salida' where ID='$ID'";
$resultado = mysqli_query($conexion, $sql);
if(!$resultado){
    echo "NO SE ACTUALIZO";
}else{
header("Location: conexion.php");
}
?>