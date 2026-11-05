<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscador Asincrónico - Mascotas Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4 fw-bold">Buscador de Productos en Tiempo Real (AJAX)</h2>
            
            <!-- Barra de Búsqueda -->
            <div class="mb-4">
                <input type="text" id="inputBusqueda" class="form-control form-control-lg" placeholder="Escribe el nombre de un producto...">
            </div>

            <!-- Contenedor dinámico de resultados -->
            <div id="resultados">
                <p class="text-muted">Empieza a escribir para buscar productos...</p>
            </div>
        </div>
    </div>

    <!-- Enlazar el script de JavaScript -->
    <script src="js/app.js"></script>
</body>
</html>