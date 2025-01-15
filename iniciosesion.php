<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">


    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="row" style="height: 850px;">
            <div class="super col-8 mt-3"></div>
            <div class="audio col-4 d-flex align-items-center justify-content-center"
                style="background-color: rgba(128, 128, 128, 0.233)">
                <form action="" method="post" id="formlogin" style="background-color: #7cc7d1">
                    <h3 class="text-primary text-center">Iniciar Sesión</h3>
                    <?php
                    include("conexion2.php");
                    include("login.php");
                    ?>
                    <div class="">

                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary border-dark">
                            <i class="bi bi-person-plus-fill text-white"></i>
                        </span>
                        <input type="email" class="form-control border-dark" placeholder="Correo" name="correo1"
                            required autofocus />

                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary border-dark">
                            <i class="bi bi-key-fill text-white"></i>
                        </span>
                        <input type="password" class="form-control border-dark" placeholder="Contraseña"
                            name="contraseña1" required />

                    </div>
                    <div class="text-center">
                        <input type="submit" value="Ingresar" class="btnIngresar" name="btningresar"></input>
                    </div>

            </div>

            </form>
        </div>
    </div>
    </div>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>

</html>