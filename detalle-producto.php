<?php
$titulo_pagina = "Detalle del Producto - Mascotas Center";
require_once 'includes/header.php';
?>

<main class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="bg-light border rounded p-5 text-center text-muted">
                [ Imagen del Producto ]
            </div>
        </div>
        <div class="col-md-6">
            <h1 class="fw-bold mb-3">Alimento Balanceado Premium 20kg</h1>
            <h3 class="text-primary fw-bold mb-3">$48.000</h3>
            <p class="text-muted mb-4">Alimento completo y equilibrado formulado específicamente para cubrir todos los requerimientos nutricionales de perros adultos de todas las razas. Favorece una piel sana y un pelaje brillante.</p>
            
            <div class="mb-4">
                <label for="cantidad" class="form-label fw-bold">Cantidad</label>
                <input type="number" class="form-control w-25" id="cantidad" value="1" min="1">
            </div>

            <a href="carrito.php" class="btn btn-primary btn-lg w-100">Agregar al Carrito</a>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>