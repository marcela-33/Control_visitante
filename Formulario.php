<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Registrar Usuario</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="super1 col-12 " style="height: 200px;"></div>
            <div class="d-flex justify-content-center align-items-center"
                style="background-color: rgba(128, 128, 128, 0.233); height: 650px;">
                <div class="text-center" style="background-color: #f888c0">
                </div>
                <form id="formregister" class="form" style="background-color: #7cc7d1" action="" method="POST">
                    <h3 class="text-primary text-center">Registrar usuario</h3>
                    <?php
                        include("conexion2.php");
                        include("registrar_usuario.php");
                    ?>
                    <div class=" p-4">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-dark" placeholder="Nombre" name="nombre"
                                required />

                        </div>

                        <div class="input-group mb-3">
                            <input type="email" class="form-control border-dark" placeholder="Correo" name="correo"
                                required />

                        </div>

                        <div class="input-group mb-3">
                            <input type="password" class="form-control border-dark" placeholder="Contraseña"
                                name="contraseña" required />

                        </div>

                        <div class="text-center">
                            <input type="submit" class="btnCrear" value="Crear" name="Nuevo">

                        </div>
                        <p class="text-center mt-2">¿Ya tienes una cuenta?
                            <a href="iniciosesion.php">Iniciar sesión</a>
                        </p>

                    </div>
                </form>
            </div>
        </div>
    </div>

</body>