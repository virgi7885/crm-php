<?php
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
$sql = "DELETE FROM clientes WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: clientes.php");
exit;
