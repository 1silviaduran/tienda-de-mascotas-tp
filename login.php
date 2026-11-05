<?php
$titulo_pagina = "Iniciar Sesión - Mascotas Center";
require_once 'includes/header.php';
?>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm p-4">
                <h1 class="h3 mb-4 fw-bold text-center">Iniciar Sesión</h1>
                
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="correo@ejemplo.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="********" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-3">Ingresar</button>
                    <div class="text-center">
                        <small class="text-muted">¿No tienes cuenta? <a href="#" class="text-decoration-none">Regístrate aquí</a></small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>