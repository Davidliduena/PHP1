<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definicion de Empleados
$aEmpleados = array();
$aEmpleados[] = array("dni" => 33300123, "nombre" => "David García", "bruto" => 85000.30);
$aEmpleados[] = array("dni" => 40874456, "nombre" => "Ana Del Valle", "bruto" => 90000);
$aEmpleados[] = array("dni" => 67567565, "nombre" => "Andrés Perez", "bruto" => 100000);
$aEmpleados[] = array("dni" => 75744545, "nombre" => "Victoria Luz", "bruto" => 70000);
$aEmpleados[] = array("dni" => 75454545, "nombre" => "Pedro Lopez", "bruto" => 70000);

function calcularNeto($bruto){
    return $bruto -($bruto * 0.17);
}

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
                                <th>Nombre</th>
                                <th>Sueldo</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($aEmpleados as $empleados) {
                                # code...
                            ?>
                                <tr>
                                    <td><?php echo $empleados["dni"]; ?></td>
                                    <td><?php echo mb_strtoupper($empleados["nombre"]); ?></td>
                                    <td><?php echo number_format( $empleados["bruto"], 2, ",", "."); ?></td>
                                    
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-12">
                            <p><b>La sumatoria de empleados activos es: <?php echo count($aEmpleados) . " ". "cuatro"; ?></p>
                        </div>
                       </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

<!-- mb_strtoupper: esto se usa para convertir de minuscullas a mayusculas en PHP -->