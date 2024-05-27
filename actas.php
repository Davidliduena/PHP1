<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function promediar($aNumeros)
{
    $suma = 0;
    foreach ($aNumeros as $numero) {
        $suma += $numero;
    }
    return $suma / count($aNumeros);
}

$aAlumnos = array();
$aAlumnos[] = array("nombre" => "Ana Valle", "notas" => array(7, 8));
$aAlumnos[] = array("nombre" => "Bernabe Paz", "notas" => array(5, 7));
$aAlumnos[] = array("nombre" => "Sebastian Aguirre", "notas" => array(6, 9));
$aAlumnos[] = array("nombre" => "Monica Ledesma", "notas" => array(8, 9));


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Listado productos</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Acta</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table border table-hover">
                        <thead>
                            <tr>
                                <th>Alumno</th>
                                <th>Nota 1</th>
                                <th>Nota 2</th>
                                <th>Promedio</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                        $promedioCurso = 0;
                        $suma = 0;

                        foreach ($aAlumnos as $alumno) {
                            $promedio = promediar($alumno["notas"]);
                            $suma = $suma + $promedio;
                        ?>
                                <tr>
                                    <td><?php echo $alumno["nombre"]; ?></td>
                                    <td><?php echo $alumno["notas"] [0]; ?></td>
                                    <td><?php echo $alumno["notas"] [1]; ?></td>
                                    <td><?php echo number_format($promedio, 2, ",", "."); ?></td>
                                </tr>
                            <?php 
                        } 
                        $promedioCurso = $suma / count($aAlumnos);  ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-12">
                            <p><b>La suma del promedio de la cursada es : <?php echo number_format($promedioCurso, 2,  ",", "."); ?> </p>
                        </div>
                       </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>