<?php
require_once 'config/conexion.php';

$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $rol = 'usuario'; // Rol por defecto para nuevos registros

    if (!empty($nombre) && !empty($email) && !empty($password)) {
        // Verificar que el correo electrónico no exista previamente
        $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
        $stmt->execute([':email' => $email]);
        
        if ($stmt->fetch()) {
            $mensaje = "El correo electrónico ya se encuentra registrado.";
        } else {
            // Encriptación de contraseña segura según OWASP
            $passwordHash = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO usuarios (nombre, email, password, rol) VALUES (:nombre, :email, :password, :rol)";
            $stmtInsert = $pdo->prepare($sql);
            $stmtInsert->execute([
                ':nombre' => $nombre,
                ':email' => $email,
                ':password' => $passwordHash,
                ':rol' => $rol
            ]);

            header('Location: login.php?status=registrado');
            exit;
        }
    } else {
        $mensaje = "Por favor, complete todos los campos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Mascotas Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm p-4">
                <h2 class="mb-4 fw-bold text-center">Registro de Usuario</h2>
                <?php if (!empty($mensaje)): ?>
                    <div class="alert alert-danger"><?= htmlspecialchars($mensaje) ?></div>
                <?php endif; ?>
                <form action="registro.php" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                    <div class="mt-3 text-center">
                        <a href="login.php">¿Ya tienes cuenta? Inicia sesión aquí</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>