<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Agregar Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

  <h2>Agregar Cliente</h2>
  <form method="POST" action="guardar_cliente.php" class="mt-3">
    <div class="mb-3">
      <label class="form-label">Nombre:</label>
      <input type="text" name="nombre" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Email:</label>
      <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Teléfono:</label>
      <input type="text" name="telefono" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Dirección:</label>
      <textarea name="direccion" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="clientes.php" class="btn btn-secondary">Volver</a>
  </form>
</body>
</html>
