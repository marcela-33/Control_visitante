<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Reporte Fecha</title>

</head>

<body>
    <div id="inicio" class="row sticky-top">
        <div class="h2 col-8">SUPER AUDIO / CONTROL VISITANTES</div>
        <div class="text-end mt-2 col-4"><a href="iniciosesion.php" style="color: white;">Cerrar sesión</a></div>
    </div>
    <div class="h4 col-12 text-center" style="background-color: rgb(214, 208, 208); height: 50px;">
        PRESENCIA DE VISITAS
    </div>
    <div class="row col-12">
        <div class="iconos col-2">
            <a href="inicio.html" title="Inicio"><i class="bi bi-house-door-fill"
                    style="font-size: 3rem; color: black;">
                </i></a><br><br>
            <a href="agregar.php" title=" Registrar visitante"><i class="bi bi-journal-check "
                    style="font-size: 3rem; color: black;"></i></a><br><br>
            <a href="registros.php" title="Atrás"><i class="bi bi-arrow-bar-left"
                    style="font-size: 3rem; color: black;"></i></a><br><br>

        </div>
        <div class="col-10">
            
              
            <form class="form-inline" method="POST" action="">
                <label>Fecha Desde:</label>
                <input type="date" class="form-control" placeholder="Start" name="date1" />
                <label>Hasta</label>
                <input type="date" class="form-control" placeholder="End" name="date2" /><br>
                <button class="btn btn-primary" name="search">Buscar<span
                        class="glyphicon glyphicon-search"></span></button>
                <a href="reporte_fecha.php" type="button" class="btn btn-success"><span
                        class="glyphicon glyphicon-refresh">Refrescar<span></a>
            </form>
            
            
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="alert-info">
                        <tr>
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
                        <?php include'busqueda.php'?>
                    </tbody>
                </table>

            </div>
            <a href="generar_informe.php" class="btn btn-info">Generar informe</a>

        </div>

</body>

</html>