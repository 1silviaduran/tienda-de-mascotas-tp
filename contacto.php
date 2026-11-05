<?php
$titulo_pagina = "Contacto - Mascotas Center";
require_once 'includes/header.php';
?>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm p-4">
                <h1 class="h3 mb-3 fw-bold text-center">Contáctanos</h1>
                <p class="text-muted text-center mb-4">¿Tienes dudas sobre nuestros productos o envíos en Salta? Escríbenos.</p>
                
                <form>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre y Apellido</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ej. Juan Pérez" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="correo@ejemplo.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu consulta aquí..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>