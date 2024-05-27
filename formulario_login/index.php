<?php
ini_set('disply_errors', 1);
ini_set('disply_startup_errors', 1);
error_reporting(E_ALL);

if ($_POST) {
    $usuario = $_POST["txtUsuario"];
    $clave = $_POST["txtClave"];

    if ($usuario != "" && $clave != "") {
        header("Location: acceso-confirmado.php");
    }else{
        $mensaje = "usuario o contraseña incorrecta";
    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Formulario Login</title>
</head>

<body>

    <body>
        <main class="container">
            <div class="row">
                <div class="col-6 text-center py-5">
                    <h1>formulario login</h1>
                <?php
                    if (isset($mensaje)) {?>
                       <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje?>
                       </div>
                   <?php }
                ?>
                </div>
                <div class="row">
                    <div class="col-6">
                        <form action="" method="post">
                            <div class="py-3">
                                <label for="txtUsuario">Usuario</label>
                                <input class="form-control" type="text" name="txtUsuario" id="txtUsuario">
                            </div>
                            <div class="py-3">
                                <label for="txtUsuario">Contraseña</label>
                                <input class="form-control" type="password" name="txtClave" id="txtClave">
                            </div>
                            <div class="py-3">
                                <button class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

    </body>

</html>