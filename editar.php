<?php
    include("conexion2.php");
?>

<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Editar</title>

</head>

<body>
    <?php
        if(isset($_POST['actualizar'])){

            $ID=$_POST['ID'];
            $fecha=$_POST['date'];
            $documento=$_POST['document'];
            $nombre=$_POST['name'];
            $apellido=$_POST['apellido'];
            $visita=$_POST['visita'];
            $equipo=$_POST['equipo'];
            $motivo=$_POST['motivo'];
            $contacto=$_POST['contacto'];
            $Fecha_salida=$_POST['Fecha_salida'];

            $sql = "update visitantes set fecha_ingreso='$fecha', documento_visitante='$documento', nombre_visitante='$nombre', apellido_visitante='$apellido', a_quien_visita='$visita', ingresa_equipo='$equipo', motivo_visita='$motivo', telefono_contacto='$contacto', Fecha_salida='$Fecha_salida' where ID='$ID'";
            $resultado = mysqli_query($conexion, $sql);
            if($resultado){
                echo "<script language=''JavaScript'>
                       location.assign('registros.php');
                      </script>";
            }else{
                echo "<script language=''JavaScript'>
                       location.assign('registros.php');
                      </script>";
            }
            mysqli_close($conexion); 
        }else{

            $ID=$_GET['ID'];
            $sql="select * from visitantes where ID='".$ID."'";
            $resultado=mysqli_query($conexion,$sql);     
            
            $fila=mysqli_fetch_assoc($resultado);
            $fecha=$fila["fecha_ingreso"];
            $documento=$fila["documento_visitante"];
            $nombre=$fila["nombre_visitante"];
            $apellido=$fila["apellido_visitante"];
            $visita=$fila["a_quien_visita"];
            $equipo=$fila["ingresa_equipo"];
            $motivo=$fila["motivo_visita"];
            $contacto=$fila["telefono_contacto"];
            $Fecha_salida=$fila["Fecha_salida"];

            mysqli_close($conexion);
    ?>

    <div>

        <form class="form-registrar row g-5" name="controlvisitantes" action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <div class="registro-entrada"><a href="registros.php" title="Lista de visitantes"><i
                        class="bi bi-person-lines-fill" style="font-size: 3rem; color: black;"></i>
                </a>REGISTRO DE SALIDA</div>
            <div class="col-12">
                <label for="fecha" class="form-label">Fecha de ingreso</label>
                <input type="datetime-local" class="form-control" name="date" value="<?php echo $fecha; ?>">
                <label for="fecha" class="form-label">Fecha de salida</label>
                <input type="datetime-local" class="form-control" name="Fecha_salida"
                    value="<?php echo $Fecha_salida; ?>">
            </div>
            <input type="hidden" name="ID" value="<?php echo $ID; ?>">
            <div class="recuadro_input col-md-6">
                <input type="number" class="form-control" placeholder="Identificación" name="document" required
                    id="document" value="<?php echo $documento; ?>" />

            </div>
            <div class="recuadro_input col-md-6">

            </div>
            <div class="recuadro_input col-md-6">
                <input type="text" class="form-control" placeholder="Nombre" name="name" required
                    value="<?php echo $nombre; ?>" />
            </div>
            <div class="recuadro_input col-md-6">
                <input type="text" class="form-control" placeholder="Apellido" name="apellido" required
                    value="<?php echo $apellido; ?>" />
            </div>

            <div class="recuadro_input col-md-6">
                <input type="text" class="form-control" placeholder="A quien visita" name="visita" id="visita"
                    value="<?php echo $visita; ?>" required />
            </div>
            <div class="recuadro_input col-md-6">
                <input type="text" class="form-control" placeholder="Motivo de la visita" name="motivo" id="motivo"
                    value="<?php echo $motivo; ?>" required />
            </div>
            <div class="recuadro_input col-md-6">
                <input type="text" class="form-control" placeholder="Ingresa equipo" name="equipo" id="equipo"
                    value="<?php echo $equipo; ?>" required />
            </div>
            <div class="recuadro_input col-md-6">
                <input type="number" class="form-control" placeholder="Telefono de contacto" name="contacto"
                    value="<?php echo $contacto; ?>" />
            </div>
            <div class="text-end col-md-6">
                <input type="submit" class="btnGuardar" name="actualizar" value="Actualizar"></input>
            </div>
            <div class="text-start col-md-6">
                <input type="reset" value="Borrar" style="border-radius: 10px; color: white; width: 80px;
                    background-color: rgb(3, 43, 70); padding: 10px;"></input>
            </div>
    </div>



    </form>
    </div>
    <?php
        }
?>
</body>

</html>