<?php
    header("Content-type: application/xls");
    header("Content-Disposition: attachment; filename = Excel.xls");
?>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Reporte Fecha</title>

</head>

<body>

    <div class="h4 col-12 text-center" style="background-color: rgb(214, 208, 208); height: 50px;">
        PRESENCIA DE VISITAS
    </div>
    <div class="row col-12">

        <div class="col-10">


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

        </div>

</body>

</html>