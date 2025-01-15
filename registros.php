<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Lista de visitantes</title>
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
        <div class="text-end mt-2 col-4"><a href="iniciosesion.php" style="color: white;">Cerrar sesión</a></div>
    </div>
    <div class="col-12" style="background-color: cadetblue;">
        </style>
        <a href="inicio.html" title="Inicio"><i class="bi bi-house-door-fill p-3"
                style="font-size: 3rem; color: black;"></i></a>

        <a href="agregar.php" title=" Registrar visitante"><i class="bi bi-journal-check"
                style="font-size: 3rem; color: black;"></i></a><br>

    </div>
    <div class="h4 col-12 text-center" style="background-color: rgb(214, 208, 208); height: 50px;">
        PRESENCIA DE VISITAS
    </div>

    <div class="text-right mb-2">
        <a href="reporte_fecha.php" class="btn btn-primary"><i class="bi bi-calendar3 m-2"></i>Busqueda por fecha</a>

    </div>
    <div class="text-right mb-2">
        <a href="reporte_busqueda.php" class="btn btn-dark"><i class="bi bi-search m-2"></i>Busqueda    </a>

    </div>

    <?php
        include("conexion2.php");
        $sql="select * from visitantes";
        $resultado=mysqli_query($conexion,$sql);
    ?>

    <table class=table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha entrada</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>A quien visita</th>
                <th>Motivo</th>
                <th>Ingreso equipo</th>
                <th>Contacto</th>
                <th>Fecha salida</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($filas=mysqli_fetch_assoc($resultado)){
                    
            ?>
            <tr>
                <td><?php echo $filas['ID'] ?></td>
                <td><?php echo $filas['fecha_ingreso'] ?></td>
                <td><?php echo $filas['documento_visitante'] ?></td>
                <td><?php echo $filas['nombre_visitante'] ?></td>
                <td><?php echo $filas['apellido_visitante'] ?></td>
                <td><?php echo $filas['a_quien_visita'] ?></td>
                <td><?php echo $filas['motivo_visita'] ?></td>
                <td><?php echo $filas['ingresa_equipo'] ?></td>
                <td><?php echo $filas['telefono_contacto'] ?></td>
                <td><?php echo $filas['Fecha_salida'] ?></td>
                <td>
                    <?php echo "<a href='editar.php?ID=".$filas['ID']."'>Actualizar</a>"; ?>

                </td>
            </tr>
            <?php
                }
            ?>

        </tbody>

    </table>
    <?php
        mysqli_close($conexion);
    ?>

</body>

</html>