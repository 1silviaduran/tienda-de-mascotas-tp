<?php
require_once '../config/conexion.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: index.php');
    exit;
}

// Obtener datos actuales del producto de forma segura
$stmt = $pdo->prepare("SELECT * FROM productos WHERE id = :id");
$stmt->execute([':id' => $id]);
$producto = $stmt->fetch();

if (!$producto) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim($_POST['titulo'] ?? '');
    $descripcion = trim($_POST['descripcion'] ?? '');
    $precio = $_POST['precio'] ?? 0;

    if (!empty($titulo)) {
        $sql = "UPDATE productos SET titulo = :titulo, descripcion = :descripcion, precio = :precio WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':titulo' => $titulo,
            ':descripcion' => $descripcion,
            ':precio' => $precio,
            ':id' => $id
        ]);

        header('Location: index.php?status=updated');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto - Mascotas Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm p-4">
                <h2 class="mb-4 fw-bold">Editar Producto</h2>

                <form action="editar.php?id=<?= $producto['id'] ?>" method="POST">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título del Producto</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?= htmlspecialchars($producto['titulo']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required><?= htmlspecialchars($producto['descripcion']) ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio ($)</label>
                        <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="<?= htmlspecialchars($producto['precio']) ?>" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Actualizar Producto</button>
                    <a href="index.php" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>