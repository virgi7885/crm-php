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
  <title>Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
  <h1>Bienvenido, <?php echo $_SESSION['usuario_nombre']; ?> 👋</h1>
  <a href="clientes.php" class="btn btn-primary">Ver clientes</a>
  <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>
</body>
</html>
