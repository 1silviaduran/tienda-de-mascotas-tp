<?php
$titulo_pagina = "Blog - Mascotas Center";
require_once 'includes/header.php';
?>

<main class="container my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Blog y Consejos</h1>
        <p class="lead text-muted">Artículos de interés para el cuidado y la salud de tus mascotas.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Cómo elegir el mejor alimento para tu perro</h5>
                    <p class="text-muted small">Publicado el 15 de Octubre, 2026</p>
                    <p class="card-text">Descubre qué ingredientes priorizar según la edad, tamaño y nivel de actividad física de tu canino.</p>
                    <a href="#" class="btn btn-outline-dark btn-sm">Leer más</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Cuidados esenciales para gatos en época de calor</h5>
                    <p class="text-muted small">Publicado el 20 de Octubre, 2026</p>
                    <p class="card-text">Consejos prácticos para mantener a tu felino bien hidratado y fresco durante los días de altas temperaturas.</p>
                    <a href="#" class="btn btn-outline-dark btn-sm">Leer más</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>