<?php
// Inicializamos variables para los mensajes y para mantener los datos en caso de error
$mensaje_alerta = "";
$tipo_alerta = "";
$nombre = "";
$email = "";
$comentario = "";

// Verificamos si se envió el formulario mediante POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Captura y Sanitización estricta (Prevenimos XSS y espacios vacíos)
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $comentario = trim($_POST['comentario'] ?? '');

    // 2. Validación en el Servidor
    if (empty($nombre) || empty($email) || empty($comentario)) {
        $mensaje_alerta = "Error: Todos los campos son obligatorios.";
        $tipo_alerta = "danger";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Validar formato estricto de correo electrónico
        $mensaje_alerta = "Error: El formato del correo electrónico no es válido.";
        $tipo_alerta = "danger";
    } else {
        // Si todo está correcto, sanitizamos para mostrar de forma segura en pantalla (Seguridad XSS)
        $nombre_seguro = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
        $email_seguro = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $comentario_seguro = htmlspecialchars($comentario, ENT_QUOTES, 'UTF-8');

        $mensaje_alerta = "¡Mensaje enviado con éxito! Gracias <strong>{$nombre_seguro}</strong>, nos pondremos en contacto a la brevedad.";
        $tipo_alerta = "success";

        // Limpiamos los campos solo si el envío fue exitoso
        $nombre = "";
        $email = "";
        $comentario = "";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Mascotas Center (TP5)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-sm p-4">
                    <h2 class="mb-3 fw-bold text-center">Contacto (Método POST)</h2>
                    <p class="text-muted text-center mb-4">Ejemplo de procesamiento seguro con prevención de XSS.</p>

                    <!-- Mensaje de Retroalimentación al Usuario -->
                    <?php if (!empty($mensaje_alerta)): ?>
                        <div class="alert alert-<?php echo $tipo_alerta; ?> alert-dismissible fade show" role="alert">
                            <?php echo $mensaje_alerta; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <!-- Formulario con Persistencia de Datos (value="<?php echo ... ?>") -->
                    <form action="contacto-procesar.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre y Apellido</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="comentario" class="form-label">Mensaje o Consulta</label>
                            <textarea class="form-control" id="comentario" name="comentario" rows="4" required><?php echo htmlspecialchars($comentario, ENT_QUOTES, 'UTF-8'); ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar por POST</button>
                    </form>
                    
                    <div class="text-center mt-4">
                        <a href="index.php" class="text-decoration-none">← Volver al inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>