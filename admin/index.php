<?php
require_once '../config/conexion.php';

// Consulta segura para obtener los productos
$stmt = $pdo->query("SELECT * FROM productos ORDER BY id DESC");
$registros = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administración - Mascotas Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Panel de Administración - Mascotas Center</h2>
        <a href="../index.php" class="btn btn-outline-secondary">Ver Sitio Web</a>
    </div>

    <a href="crear.php" class="btn btn-primary mb-3">Agregar Nuevo Registro</a>

    <div class="card shadow-sm p-3">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($registros) > 0): ?>
                    <?php foreach ($registros as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item['id']) ?></td>
                        <td><?= htmlspecialchars($item['titulo']) ?></td>
                        <td><?= htmlspecialchars($item['descripcion']) ?></td>
                        <td>$<?= htmlspecialchars($item['precio']) ?></td>
                        <td class="text-center">
                            <a href="editar.php?id=<?= $item['id'] ?>" class="btn btn-sm btn-warning me-1">Editar</a>
                            <a href="eliminar.php?id=<?= $item['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Confirma eliminar este registro?')">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center text-muted">No hay productos cargados en la base de datos.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>