<?php
$titulo_pagina = "Perros - Mascotas Center";
require_once 'includes/header.php';
?>

<main class="container my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Sección de Perros</h1>
        <p class="lead text-muted">Todo lo que necesitas para la nutrición, cuidado y diversión de tu perro.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title fw-bold">Alimento Balanceado 20kg</h5>
                    <p class="card-text text-muted">Nutrición completa y alta concentración proteica.</p>
                    <span class="badge bg-primary fs-6 mb-3 mx-auto">$48.000</span>
                    <a href="detalle-producto.php" class="btn btn-outline-dark mt-auto">Ver Producto</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title fw-bold">Correa Retráctil</h5>
                    <p class="card-text text-muted">Diseño ergonómico con cinta reflectante.</p>
                    <span class="badge bg-primary fs-6 mb-3 mx-auto">$14.500</span>
                    <a href="detalle-producto.php" class="btn btn-outline-dark mt-auto">Ver Producto</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title fw-bold">Juguete Mordedora</h5>
                    <p class="card-text text-muted">Ideal para reducir la ansiedad y cuidar sus dientes.</p>
                    <span class="badge bg-primary fs-6 mb-3 mx-auto">$8.900</span>
                    <a href="detalle-producto.php" class="btn btn-outline-dark mt-auto">Ver Producto</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>