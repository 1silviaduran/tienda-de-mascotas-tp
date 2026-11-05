<?php
$titulo_pagina = "Calculadora de Raciones - Mascotas Center";
require_once 'includes/header.php';
?>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm p-4">
                <h1 class="h3 mb-3 fw-bold text-center">Calculadora de Ración Diaria</h1>
                <p class="text-muted text-center mb-4">Calcula cuántos gramos de alimento debe consumir tu mascota por día.</p>
                
                <form>
                    <div class="mb-3">
                        <label for="peso" class="form-label">Peso de la mascota (kg)</label>
                        <input type="number" class="form-control" id="peso" placeholder="Ej. 15" required>
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo de animal</label>
                        <select class="form-select" id="tipo">
                            <option value="perro">Perro</option>
                            <option value="gato">Gato</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary w-100 mb-3">Calcular Ración</button>
                </form>

                <div class="alert alert-light border text-center mt-3" role="alert">
                    <strong>Resultado recomendado:</strong> Ingrese los datos para ver la porción diaria.
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>