<?php
session_start();
if (isset($_SESSION['usuario_id'])) {
  header("Location: panel.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <h2 class="mb-4 text-center">Iniciar sesión</h2>
      <form method="POST" action="procesar_login.php">
        <div class="mb-3">
          <label>Email:</label>
          <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Contraseña:</label>
          <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Entrar</button>
      </form>
    </div>
  </div>
</body>
</html>

