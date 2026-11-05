<?php
$termino_busqueda = "";
$resultados = [];

// Lista de productos simulada para el buscador
$catalogo_productos = [
    ["nombre" => "Alimento Balanceado Perros 20kg", "categoria" => "Perros", "precio" => "$48.000"],
    ["nombre" => "Correa Retráctil y Collar", "categoria" => "Perros", "precio" => "$14.500"],
    ["nombre" => "Alimento Balanceado Gatos 10kg", "categoria" => "Gatos", "precio" => "$36.500"],
    ["nombre" => "Piedras Sanitarias Sílica", "categoria" => "Gatos", "precio" => "$9.200"],
    ["nombre" => "Rascador Torre con Juguete", "categoria" => "Gatos", "precio" => "$25.000"]
];

// Comprobamos si se envió una consulta por GET
if (isset($_GET['q'])) {
    // Sanitización estricta del parámetro GET contra XSS
    $termino_busqueda = trim($_GET['q']);
    $termino_seguro = htmlspecialchars($termino_busqueda, ENT_QUOTES, 'UTF-8');

    if (!empty($termino_busqueda)) {
        // Filtramos los productos que coincidan con la búsqueda
        foreach ($catalogo_productos as $producto) {
            if (stripos($producto['nombre'], $termino_busqueda) !== false) {
                $resultados[] = $producto;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador - Mascotas Center (TP5)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm p-4 mb-4">
                    <h2 class="mb-3 fw-bold text-center">Buscador de Productos (Método GET)[cite: 3]</h2>
                    <p class="text-muted text-center mb-4">Realiza consultas rápidas filtrando el catálogo de la tienda.</p>

                    <!-- Formulario por GET -->
                    <form action="buscar.php" method="GET" class="input-group mb-3">
                        <input type="text" class="form-control" name="q" placeholder="Buscar alimento, correa, rascador..." value="<?php echo htmlspecialchars($termino_busqueda, ENT_QUOTES, 'UTF-8'); ?>" required>
                        <button class="btn btn-dark" type="submit">Buscar por GET</button>
                    </form>
                    
                    <div class="text-center">
                        <a href="contacto-procesar.php" class="btn btn-outline-primary btn-sm me-2">Ir al formulario POST</a>
                        <a href="../index.php" class="btn btn-outline-secondary btn-sm">Volver al sitio principal</a>
                    </div>
                </div>

                <!-- Resultados de la Búsqueda -->
                <?php if (isset($_GET['q'])): ?>
                    <div class="card shadow-sm p-4">
                        <h4 class="mb-3">Resultados para: "<em><?php echo htmlspecialchars($termino_busqueda, ENT_QUOTES, 'UTF-8'); ?></em>"</h4>
                        
                        <?php if (count($resultados) > 0): ?>
                            <div class="list-group">
                                <?php foreach ($resultados as $res): ?>
                                    <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="mb-1"><?php echo $res['nombre']; ?></h5>
                                            <small class="text-muted">Categoría: <?php echo $res['categoria']; ?></small>
                                        </div>
                                        <span class="badge bg-primary fs-6"><?php echo $res['precio']; ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-warning mb-0" role="alert">
                                No se encontraron productos que coincidan con tu búsqueda.
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>