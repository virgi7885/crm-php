<?php
session_start();

// Si el usuario ya está logueado, lo mandamos al panel
if (isset($_SESSION['usuario_id'])) {
  header("Location: panel.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Bienvenido al CRM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .hero {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>
<body>

<div class="hero">
  <div class="text-center">
    <h1 class="display-4 mb-4">Bienvenido a Mi CRM Personal</h1>
    <p class="lead mb-5">Gestión de clientes simple, segura y funcional.</p>
    <a href="login.php" class="btn btn-primary btn-lg">Iniciar sesión</a>
  </div>
</div>

</body>
</html>
