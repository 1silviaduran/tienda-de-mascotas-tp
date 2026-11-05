<?php
$titulo_pagina = "Carrito de Compras - Mascotas Center";
require_once 'includes/header.php';
?>

<main class="container my-5">
    <h1 class="h3 mb-4 fw-bold">Tu Carrito de Compras</h1>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-sm p-3 mb-4">
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                    <div>
                        <h5 class="fw-bold mb-1">Alimento Balanceado Premium 20kg</h5>
                        <p class="text-muted mb-0">Cantidad: 1</p>
                    </div>
                    <span class="fw-bold fs-5">$48.000</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="fw-bold mb-1">Piedras Sanitarias Sílica</h5>
                        <p class="text-muted mb-0">Cantidad: 2</p>
                    </div>
                    <span class="fw-bold fs-5">$18.400</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm p-4">
                <h5 class="fw-bold mb-3">Resumen del Pedido</h5>
                <div class="d-flex justify-content-between mb-2">
                    <span>Subtotal</span>
                    <span>$66.400</span>
                </div>
                <div class="d-flex justify-content-between mb-3 border-bottom pb-2">
                    <span>Envío en Salta Capital</span>
                    <span class="text-success">Gratis</span>
                </div>
                <div class="d-flex justify-content-between fw-bold fs-5 mb-4">
                    <span>Total</span>
                    <span>$66.400</span>
                </div>
                <a href="#" class="btn btn-primary w-100">Proceder al Pago</a>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>