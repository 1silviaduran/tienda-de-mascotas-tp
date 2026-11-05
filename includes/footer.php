<?php
$titulo_pagina = "Gatos - Mascotas Center";
require_once 'includes/header.php';
?>

<main class="container my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Sección de Gatos</h1>
        <p class="lead text-muted">Todo lo necesario para el bienestar, entretenimiento y nutrición de tu felino.</p>
    </div>

    <div class="row g-4">
        <!-- Tarjeta Producto 1 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title fw-bold">Alimento Balanceado Gatos 10kg</h5>
                    <p class="card-text text-muted">Fórmula especializada para el cuidado del tracto urinario y pelaje brillante.</p>
                    <span class="badge bg-primary fs-6 mb-3 mx-auto">$36.500</span>
                    <a href="#" class="btn btn-outline-dark mt-auto">Comprar Producto</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Producto 2 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title fw-bold">Piedras Sanitarias Sílica</h5>
                    <p class="card-text text-muted">Máxima absorción de líquidos y control total de olores por semanas.</p>
                    <span class="badge bg-primary fs-6 mb-3 mx-auto">$9.200</span>
                    <a href="#" class="btn btn-outline-dark mt-auto">Comprar Producto</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Producto 3 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title fw-bold">Rascador Torre con Juguete</h5>
                    <p class="card-text text-muted">Estructura recubierta en yute natural para proteger tus muebles.</p>
                    <span class="badge bg-primary fs-6 mb-3 mx-auto">$25.000</span>
                    <a href="#" class="btn btn-outline-dark mt-auto">Comprar Producto</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>