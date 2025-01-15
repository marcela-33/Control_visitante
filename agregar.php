<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="/conexion2.php">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Agregar</title>
</head>

<body>
    <?php
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

            include("conexion2.php");

            $sql = "insert into visitantes (fecha_ingreso,documento_visitante,nombre_visitante,apellido_visitante,a_quien_visita,motivo_visita,ingresa_equipo,telefono_contacto, Fecha_salida)
            VALUES ('".$fecha."', '".$documento."', '".$nombre."', '".$apellido."', '".$visita."', '".$motivo."', '".$equipo."', '".$contacto."', '".$Fecha_salida."')";

            $resultado=mysqli_query($conexion,$sql);

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
            
    ?>

    <div id="registrar">
        <div id="inicio" class="row sticky-top">
            <div class="h2 col-8">SUPER AUDIO / CONTROL VISITANTES</div>
            <div class="text-end mt-2 col-4"><a href="iniciosesion.php" style="color: white;">Cerrar sesión</a></div>
        </div>

        <form class="form-registrar row g-5" name="controlvisitantes" method="post" action="<?=$_SERVER['PHP_SELF']?>">
            <div class="registro-entrada"><a href="inicio.html" title=" Inicio"><i class="bi bi-house-door-fill mx-3"
                        style="font-size: 2rem; color: black;">
                    </i></a>REGISTRO DE ENTRADA
                <a href="registros.php" title="Presencia de visitas"><i class="bi bi-person-lines-fill"
                        style="font-size: 3rem; color: black;"></i></a><br><br>
            </div>
            <div class="col-12">
                <label for="fecha" class="form-label">Fecha de ingreso</label>
                <input type="datetime-local" class="form-control" name="date">
                <label for="fecha" class="form-label">Fecha de salida</label>
                <input type="datetime-local" class="form-control" name="Fecha_salida">
            </div>
            <div class="recuadro_input col-md-6">
                <input type="number" class="form-control" placeholder="Identificación" name="document" id="document"
                    required />

            </div>
            <div class="recuadro_input col-md-6">

            </div>
            <div class="recuadro_input col-md-6">
                <input type="text" class="form-control" placeholder="Nombre" name="name" id="name" required />
            </div>
            <div class="recuadro_input col-md-6">
                <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido" required />
            </div>

            <div class="recuadro_input col-md-6">
                <input type="text" class="form-control" placeholder="A quien visita" name="visita" id="visita"
                    required />
            </div>
            <div class="recuadro_input col-md-6">
                <input type="text" class="form-control" placeholder="Motivo de la visita" name="motivo" id="motivo"
                    required />
            </div>
            <div class="recuadro_input col-md-6">
                <input type="text" class="form-control" placeholder="Ingresa equipo" name="equipo" id="equipo"
                    required />
            </div>
            <div class="recuadro_input col-md-6">
                <input type="number" class="form-control" placeholder="Telefono de contacto" name="contacto"
                    id="contacto" />
            </div>
            <div class="text-end col-md-6">
                <input type="submit" class="btnGuardar" value="Guardar" name="registro"></input>
            </div>
            <div class="text-start col-md-6">
                <input type="reset" value="Borrar" style="border-radius: 10px; color: white; width: 80px;
                background-color: rgb(3, 43, 70); padding: 10px;"></input>
            </div>
    </div>



    </form>
    <?php
        }
    ?>
    </div>
</body>


</html>