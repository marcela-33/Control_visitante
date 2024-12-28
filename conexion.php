<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title></title>
    <style type="text/css">
    table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
        background-color: rgb(202, 221, 243);

    }

    th {
        background-color: black;
    }

    td,
    th {
        border: solid 1px black;
        padding: 2px;
        text-align: center;
    }
    </style>
</head>

<body>
    <div id="inicio" class="row sticky-top">
        <div class="h2 col-8">SUPER AUDIO / CONTROL VISITANTES</div>
        <div class="text-end mt-2 col-4"><a href="Login.html" style="color: white;">Cerrar sesión</a></div>
    </div>
    <div class="col-12" style="background-color: cadetblue;">
        </style>
        <a href="inicio.html" title="Inicio"><i class="bi bi-house-door-fill p-3"
                style="font-size: 3rem; color: black;"></i></a>

        <a href="informe.html" title="Informe"><i class="bi bi-file-earmark-text p-3"
                style="font-size: 3rem; color: black;"></i></a>
    </div>
    <div class="h4 col-12" style="background-color: rgb(214, 208, 208); height: 50px;">
        <a href="#" title="Salida"><i class="bi bi-box-arrow-right mx-5" style="font-size: 3rem; color: black;"></i></a>
        PRESENCIA DE VISITAS
    </div>
    <div> <br>
        <form class="d-flex">

            <div class="mx-3">
                <input type="text" name="document"><br><br>
                <input type="text" name="apellido"><br><br>
                <!--<input type="datetime-local" name="Fecha_salida"><br><br>-->
                <button class="salida btn btn-outline-success" type="submit" name="btnactualizar"
                    value="ok">Actualizar</button>
            </div>
        </form>
    </div><br>

</body>

</html>

<?php
//Validar datos del servidor 
$server = "localhost";
$user = "root";
$pass = "";
$db = "controlvisitantes";
//Conectar a la base de datos
$conexion = new mysqli ($server, $user, $pass, $db);
//Hacer el llamado al input del formulario
if(isset($_POST['registro'])){
    
    //$ID=$_POST['ID'];
    $fecha=$_POST['date'];
    $documento=$_POST['document'];
    $nombre=$_POST['name'];
    $apellido=$_POST['apellido'];
    $visita=$_POST['visita'];
    $equipo=$_POST['equipo'];
    $motivo=$_POST['motivo'];
    $contacto=$_POST['contacto'];
    $Fecha_salida=$_POST['Fecha_salida'];


//Insertar datos de registro al mysql xampp indicando nombre de la tabla y sus atributos
    $insertar = "INSERT INTO visitantes (fecha_ingreso,documento_visitante,nombre_visitante,apellido_visitante,a_quien_visita,motivo_visita,ingresa_equipo,telefono_contacto, Fecha_salida)
    VALUES ('$fecha', '$documento', '$nombre', '$apellido', '$visita', '$motivo', '$equipo', '$contacto', '$Fecha_salida')";

    $ejecutar = $conexion->query ($insertar);
}
//Seleccionar los datos de la tabla para mostrar los registros
    $consulta = "SELECT * FROM visitantes";

    $result = $conexion->query ($consulta);
    if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table class= table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Fecha entrada</th>";
echo "<th>Documento</th>";
echo "<th>Nombre</th>";
echo "<th>Apellido</th>";
echo "<th>A quien visita</th>";
echo "<th>Motivo</th>";
echo "<th>Ingreso equipo</th>";
echo "<th>Contacto</th>";
echo "<th>Fecha salida</th>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 { ?>
<tr>
    <td><?php echo $colum['ID']; ?></td>
    <td><?php echo $colum['fecha_ingreso']; ?></td>
    <td><?php echo $colum['documento_visitante']; ?></td>
    <td><?php echo $colum['nombre_visitante']; ?></td>
    <td><?php echo $colum['apellido_visitante']; ?></td>
    <td><?php echo $colum['a_quien_visita']; ?></td>
    <td><?php echo $colum['motivo_visita']; ?></td>
    <td><?php echo $colum['ingresa_equipo']; ?></td>
    <td><?php echo $colum['telefono_contacto']; ?></td>
    <td><?php echo $colum['Fecha_salida']; ?></td>

    <td>
        <a href="editar.php?        
            fecha_ingreso=<?php echo $colum['fecha_ingreso']; ?> &
            documento_visitante=<?php echo $colum['documento_visitante']; ?> &
            nombre_visitante=<?php echo $colum['nombre_visitante']; ?> &
            apellido_visitante=<?php echo $colum['apellido_visitante']; ?> &
            a_quien_visita=<?php echo $colum['a_quien_visita']; ?> &
            motivo_visita=<?php echo $colum['motivo_visita']; ?> &
            ingresa_equipo=<?php echo $colum['ingresa_equipo']; ?> &
            telefono_contacto=<?php echo $colum['telefono_contacto']; ?> &
            Fecha_salida=<?php echo $colum['Fecha_salida']; ?>
            ">Actualizar</a>
    </td>

</tr>
<?php 
} 
?>
</table>