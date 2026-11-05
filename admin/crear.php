<?php
require_once '../config/conexion.php';

$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim($_POST['titulo'] ?? '');
    $descripcion = trim($_POST['descripcion'] ?? '');
    $precio = $_POST['precio'] ?? 0;

    if (!empty($titulo) && !empty($descripcion)) {
        // Sentencia Preparada obligatoria (Anti SQL Injection)
        $sql = "INSERT INTO productos (titulo, descripcion, precio) VALUES (:titulo, :descripcion, :precio)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':titulo' => $titulo,
            ':descripcion' => $descripcion,
            ':precio' => $precio
        ]);

        header('Location: index.php?status=created');
        exit;
    } else {
        $mensaje = "Por favor, complete todos los campos obligatorios.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto - Mascotas Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm p-4">
                <h2 class="mb-4 fw-bold">Agregar Nuevo Producto</h2>

                <?php if (!empty($mensaje)): ?>
                    <div class="alert alert-danger"><?= $mensaje ?></div>
                <?php endif; ?>

                <form action="crear.php" method="POST">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título del Producto</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio ($)</label>
                        <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar Producto</button>
                    <a href="index.php" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>