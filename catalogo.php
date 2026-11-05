<?php
$titulo_pagina = "Catálogo General - Mascotas Center";
require_once 'includes/header.php';
?>

<main class="container my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Catálogo Completo</h1>
        <p class="lead text-muted">Explora todos los productos disponibles en nuestra tienda.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title fw-bold">Alimento Perros 20kg</h5>
                    <p class="card-text text-muted">Nutrición completa para perros adultos.</p>
                    <span class="badge bg-primary fs-6 mb-3 mx-auto">$48.000</span>
                    <a href="#" class="btn btn-outline-dark mt-auto">Ver Detalles</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title fw-bold">Alimento Gatos 10kg</h5>
                    <p class="card-text text-muted">Cuidado urinario y óptimo pelaje.</p>
                    <span class="badge bg-primary fs-6 mb-3 mx-auto">$36.500</span>
                    <a href="#" class="btn btn-outline-dark mt-auto">Ver Detalles</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title fw-bold">Rascador para Gatos</h5>
                    <p class="card-text text-muted">Protege tus muebles y divierte a tu mascota.</p>
                    <span class="badge bg-primary fs-6 mb-3 mx-auto">$25.000</span>
                    <a href="#" class="btn btn-outline-dark mt-auto">Ver Detalles</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>