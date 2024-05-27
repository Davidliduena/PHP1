<?php
ini_set('disply_errors', 1);
ini_set('disply_startup_errors', 1);
error_reporting(E_ALL);



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>formulario datos personales</title>
</head>

<body>

    <body>
        <main class="container">
            <div class="row">
                <div class="col-6 text-center py-5">
                    <h1>formulario datos personales</h1>
                </div>
                <div class="row">
                    <div class="col-6">
                        <form action="resultado.php" method="post">
                            <div class="py-3">
                                <label for="txtNombre">Nombre:*</label>
                                <input class="form-control" type="text" name="txtNombre" id="txtNombre">
                            </div>
                            <div class="py-3">
                                <label for="txtDni">DNI:*</label>
                                <input class="form-control" type="text" name="txtDni" id="txtDni">
                            </div>
                            <div class="py-3">
                                <label for="txtTelefono">Telefono:*</label>
                                <input class="form-control" type="text" name="txtTelefono" id="txtTelefono">
                            </div>
                            <div class="py-3">
                                <label for="txtEdad">Edad:*</label>
                                <input class="form-control" type="text" name="txtEdad" id="txtEdad">
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