<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definicion de pacientes
$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50,
);
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79,
);
$aPacientes[] = array(
    "dni" => "11.568.778",
    "nombre" => "Martín Perez",
    "edad" => 26,
    "peso" => 77,
);
$aPacientes[] = array(
    "dni" => "11.562.788",
    "nombre" => "Juan perez",
    "edad" => 30,
    "peso" => 77,
);
$aPacientes[] = array(
    "dni" => "11.000.111",
    "nombre" => "David Lidueña",
    "edad" => 32,
    "peso" => 82,
);
$aPacientes[] = array(
    "dni" => "1.023.558.713",
    "nombre" => "Emilia Lidueña",
    "edad" => 4,
    "peso" => 20,
);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Listado pacientes</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado pacientes</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table border table-hover">
                        <thead>
                            <tr>
                                <th>DNI</th>
                                <th>Nombre y Apellido</th>
                                <th>Edad</th>
                                <th>Peso</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($aPacientes as $pacientes) {
                                # code...
    
                            ?>
                                <tr>
                                    <td><?php echo $pacientes["dni"]; ?></td>
                                    <td><?php echo $pacientes["nombre"]; ?></td>
                                    <td><?php echo $pacientes["edad"]; ?></td>
                                    <td><?php echo $pacientes["peso"]; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>