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
                <h1>Listado de productos</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table border table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Imagen</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Samsung_ML-2010.jpg/280px-Samsung_ML-2010.jpg" height="150px" alt=""></td>
                                <td>ImpresoraHp1102W</td>
                                <td>20</td>
                            </tr>
                            <tr>
                            <td>2</td>
                                <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Clase_de_m%C3%BAsica_por_pizarra_interactiva_multimedial.jpg/220px-Clase_de_m%C3%BAsica_por_pizarra_interactiva_multimedial.jpg" height="150px" alt=""></td>
                                <td>Pizarra digital</td>
                                <td>25</td>
                            </tr>
                            <tr>
                            <td>3</td>
                                <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/Laptop_collage.jpg/220px-Laptop_collage.jpg" height="150px" alt=""></td>
                                <td>Notebook</td>
                                <td>15</td>
                            </tr>
                            <tr>
                            <td colspan="3" class="text-end"><b>TOTAL</b></td>
                                <td>60 items</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </main>
    
</body>
</html>