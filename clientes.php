<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
  header("Location: login.php");
  exit;
}

require 'conexion.php';

$busqueda = $_GET['buscar'] ?? '';
$sql = "SELECT * FROM clientes WHERE nombre LIKE ? OR email LIKE ? ORDER BY creado_en DESC";
$param = "%$busqueda%";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $param, $param);
$stmt->execute();
$resultado = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
  <h2>Clientes</h2>
  <form class="row mb-3" method="GET">
    <div class="col-md-6">
      <input type="text" class="form-control" name="buscar" placeholder="Buscar por nombre o email" value="<?php echo htmlspecialchars($busqueda); ?>">
    </div>
    <div class="col-md-2">
      <button class="btn btn-primary">Buscar</button>
    </div>
    <div class="col-md-4 text-end">
      <a href="agregar_cliente.php" class="btn btn-success">+ Nuevo cliente</a>
      <a href="panel.php" class="btn btn-secondary">Menú</a>
      <a href="logout.php" class="btn btn-danger">Salir</a>
    </div>
  </form>

  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($fila = $resultado->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $fila['id']; ?></td>
          <td><?php echo $fila['nombre']; ?></td>
          <td><?php echo $fila['email']; ?></td>
          <td><?php echo $fila['telefono']; ?></td>
          <td><?php echo $fila['direccion']; ?></td>
          <td>
            <td>
            <?php if ($_SESSION['usuario_rol'] === 'admin') { ?>
              <a href="editar_cliente.php?id=<?php echo $fila['id']; ?>" class="btn btn-sm btn-warning">Editar</a>
              <a href="eliminar_cliente.php?id=<?php echo $fila['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este cliente?')">Eliminar</a>
            <?php } else { ?>
              <span class="text-muted">Sin permisos</span>
            <?php } ?>
          </td>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
