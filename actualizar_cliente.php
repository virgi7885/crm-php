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

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

$sql = "UPDATE clientes SET nombre = ?, email = ?, telefono = ?, direccion = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $nombre, $email, $telefono, $direccion, $id);
$stmt->execute();

header("Location: clientes.php");
exit;
