<?php
session_start();
// 1. Verificar que haya sesión activa
if (!isset($_SESSION['usuario_id'])) {
  header("Location: login.php");
  exit;
}

// 2. Verificar que el rol sea 'admin'
if ($_SESSION['usuario_rol'] !== 'admin') {
  header("Location: clientes.php"); // o puedes redirigir a un mensaje de error
  exit;
}
require 'conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$cliente = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Editar Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

  <h2>Editar Cliente</h2>
  <form method="POST" action="actualizar_cliente.php" class="mt-3">
    <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">

    <div class="mb-3">
      <label class="form-label">Nombre:</label>
      <input type="text" name="nombre" value="<?php echo $cliente['nombre']; ?>" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Email:</label>
      <input type="email" name="email" value="<?php echo $cliente['email']; ?>" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Teléfono:</label>
      <input type="text" name="telefono" value="<?php echo $cliente['telefono']; ?>" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Dirección:</label>
      <textarea name="direccion" class="form-control"><?php echo $cliente['direccion']; ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="clientes.php" class="btn btn-secondary">Volver</a>
  </form>
</body>
</html>
