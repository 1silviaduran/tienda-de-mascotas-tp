<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function verificarAutenticacion($rolRequerido = null) {
    // Verificar si la sesión está iniciada
    if (!isset($_SESSION['usuario_id'])) {
        header('Location: ../login.php?error=acceso_denegado');
        exit;
    }

    // Verificar restricción por roles (ej. 'admin')
    if ($rolRequerido && $_SESSION['rol'] !== $rolRequerido) {
        header('Location: ../index.php?error=sin_permisos');
        exit;
    }
}
?>