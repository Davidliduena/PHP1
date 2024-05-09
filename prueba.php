<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Ejemplo de tabla</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de alumnos</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table border table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Presentismo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Agustin</td>
                                <td>Beloso</td>
                                <td>Prsente</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>David</td>
                                <td>Lidueña</td>
                                <td>Ausente</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Emilia</td>
                                <td>Lidueña</td>
                                <td>Prsente</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Laura</td>
                                <td>Villanueva</td>
                                <td>Presente</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end">Total</td>
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </main>
    
</body>
</html>