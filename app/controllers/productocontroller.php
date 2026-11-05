<?php
require_once __DIR__ . '/../Models/ProductoModel.php';

class ProductoController {
    private $model;

    public function __construct($pdo) {
        $this->model = new ProductoModel($pdo);
    }

    public function listar() {
        // Obtener los datos del modelo
        $productos = $this->model->obtenerTodos();
        
        // Cargar la vista y pasarle los datos
        require_once __DIR__ . '/../Views/productos/index.php';
    }
}
?>