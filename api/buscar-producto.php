<?php
header('Content-Type: application/json; charset=utf-8');
require_once '../config/conexion.php'; // Tu archivo de conexión PDO

$busqueda = isset($_GET['q']) ? trim($_GET['q']) : '';

try {
    if (!empty($busqueda)) {
        // Consulta preparada con LIKE para buscar coincidencias
        $stmt = $pdo->prepare("SELECT id, titulo AS nombre, descripcion, precio FROM productos WHERE titulo LIKE :query");
        $stmt->execute([':query' => "%{$busqueda}%"]);
    } else {
        // Si no hay texto escrito, devuelve los últimos 10 registros
        $stmt = $pdo->query("SELECT id, titulo AS nombre, descripcion, precio FROM productos LIMIT 10");
    }
    
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    http_response_code(200);
    echo json_encode([
        'status' => 'success',
        'data' => $productos
    ]);

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Error al consultar la base de datos'
    ]);
}
?>