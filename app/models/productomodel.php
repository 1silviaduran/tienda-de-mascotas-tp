<?php
require_once __DIR__ . '/../../config/conexion.php';

class ProductoModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function obtenerTodos() {
        $stmt = $this->pdo->query("SELECT * FROM productos ORDER BY id DESC");
        return $stmt->fetchAll();
    }

    public function insertar($titulo, $descripcion, $precio) {
        $sql = "INSERT INTO productos (titulo, descripcion, precio) VALUES (:titulo, :descripcion, :precio)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':titulo' => $titulo,
            ':descripcion' => $descripcion,
            ':precio' => $precio
        ]);
    }
}
?>