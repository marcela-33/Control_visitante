<html lang="en">

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
    $ID=$_GET['ID'];
    $fecha=$_GET['date'];
    $documento=$_GET['document'];
    $nombre=$_GET['name'];
    $apellido=$_GET['apellido'];
    $visita=$_GET['visita'];
    $equipo=$_GET['equipo'];
    $motivo=$_GET['motivo'];
    $contacto=$_GET['contacto'];
    $Fecha_salida=$_GET['Fecha_salida'];
?>

    <div>

        <form class="form-registrar row g-5" name="controlvisitantes" action="speditar.php" method="post">
            <div class="registro-entrada"><a href="conexion.php" title=" Inicio"><i class="bi bi-person-lines-fill"
                        style="font-size: 3rem; color: black;"></i>
                </a>REGISTRO DE SALIDA</div>
            <div class="col-12">
                <label for="fecha" class="form-label">Fecha de ingreso</label>
                <input type="datetime-local" class="form-control" name="date" value="<?=$fecha?>">
                <label for="fecha" class="form-label">Fecha de salida</label>
                <input type="datetime-local" class="form-control" name="Fecha_salida" value="<?=$Fecha_salida?>">
            </div>
            <input type="hidden" name="ID" value="<?=$ID?>">
            <div class="recuadro_input col-md-6">
                <input type="number" class="form-control" placeholder="Identificación" name="document" id="document"
                    value="<?=$documento?>" required />

            </div>
            <div class="recuadro_input col-md-6">

            </div>
            <div class="recuadro_input col-md-6">
                <input type="text" class="form-control" placeholder="Nombre" name="name" required
                    value="<?=$nombre?>" />
            </div>
            <div class="recuadro_input col-md-6">
                <input type="text" class="form-control" placeholder="Apellido" name="apellido" required
                    value="<?=$apellido?>" />
            </div>

            <div class="recuadro_input col-md-6">
                <input type="text" class="form-control" placeholder="A quien visita" name="visita" id="visita"
                    value="<?=$visita?>" required />
            </div>
            <div class="recuadro_input col-md-6">
                <input type="text" class="form-control" placeholder="Motivo de la visita" name="motivo" id="motivo"
                    value="<?=$motivo?>" required />
            </div>
            <div class="recuadro_input col-md-6">
                <input type="text" class="form-control" placeholder="Ingresa equipo" name="equipo" id="equipo"
                    value="<?=$equipo?>" required />
            </div>
            <div class="recuadro_input col-md-6">
                <input type="number" class="form-control" placeholder="Telefono de contacto" name="contacto"
                    value="<?=$contacto?>" />
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

</body>

</html>