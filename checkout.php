<?php
$titulo_pagina = "Finalizar Compra - Mascotas Center";
require_once 'includes/header.php';
?>

<main class="container my-5">
    <h1 class="h3 mb-4 fw-bold">Finalizar Compra</h1>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-sm p-4 mb-4">
                <h5 class="fw-bold mb-3">1. Datos de Envío (Salta Capital)</h5>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección de Entrega</label>
                        <input type="text" class="form-control" id="direccion" placeholder="Calle y número" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono de Contacto</label>
                        <input type="tel" class="form-control" id="telefono" placeholder="387..." required>
                    </div>
                </form>
            </div>

            <div class="card shadow-sm p-4">
                <h5 class="fw-bold mb-3">2. Método de Pago</h5>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="pago" id="mp" checked>
                    <label class="form-check-label" for="mp">
                        Mercado Pago / Tarjeta de Débito o Crédito
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pago" id="efectivo">
                    <label class="form-check-label" for="efectivo">
                        Efectivo al recibir (Contra entrega)
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm p-4">
                <h5 class="fw-bold mb-3">Resumen de la Orden</h5>
                <div class="d-flex justify-content-between mb-2">
                    <span>Subtotal</span>
                    <span>$66.400</span>
                </div>
                <div class="d-flex justify-content-between mb-3 border-bottom pb-2">
                    <span>Envío</span>
                    <span class="text-success">Gratis</span>
                </div>
                <div class="d-flex justify-content-between fw-bold fs-5 mb-4">
                    <span>Total a Pagar</span>
                    <span>$66.400</span>
                </div>
                <button type="submit" class="btn btn-success btn-lg w-100">Confirmar Pedido</button>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>