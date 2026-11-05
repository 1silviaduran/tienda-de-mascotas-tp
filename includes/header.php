<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($titulo_pagina) ? $titulo_pagina : "Mascotas Center"; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand fw-bold" href="index.php">🐾 Mascotas Center</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="perros.php">Perros</a></li>
                        <li class="nav-item"><a class="nav-link" href="gatos.php">Gatos</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>