<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas Center - Sección Gatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand fw-bold" href="index.html">🐾 Mascotas Center</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="perros.html">Perros</a></li>
                        <li class="nav-item"><a class="nav-link active" href="gatos.html">Gatos</a></li>
                        <li class="nav-item"><a class="nav-link" href="calculadora.html">Calculadora</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="nosotros.html">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacto.html">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="carrito.html">Carrito 🛒</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.html">Mi Cuenta</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        <h1 class="mb-4">Catálogo para Gatos</h1>
        <div class="row g-4">
            <div class="col-md-4">
                <article class="card h-100 shadow-sm">
                    <div class="bg-secondary text-white text-center py-5">Alimento Gato Castrado</div>
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title h5">Balanceado Gatos Castrados 7.5kg</h2>
                        <p class="card-text text-muted">Control de peso y protección urinaria.</p>
                        <span class="fw-bold fs-5 text-success mb-3">$28.000</span>
                        <a href="detalle-producto.html" class="btn btn-primary mt-auto">Ver Detalle</a>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="card h-100 shadow-sm">
                    <div class="bg-secondary text-white text-center py-5">Rascador Gato</div>
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title h5">Rascador Torre con Juguete</h2>
                        <p class="card-text text-muted">Protege tus muebles con este rascador resistente.</p>
                        <span class="fw-bold fs-5 text-success mb-3">$14.500</span>
                        <a href="detalle-producto.html" class="btn btn-primary mt-auto">Ver Detalle</a>
                    </div>
                </article>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-1">🐾 Mascotas Center — Salta Capital, Argentina</p>
            <small class="text-muted">© 2026 Todos los derechos reservados.</small>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>