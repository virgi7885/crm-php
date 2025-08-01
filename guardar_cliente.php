<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
  header("Location: login.php");
  exit;
}

require 'conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

$sql = "INSERT INTO clientes (nombre, email, telefono, direccion) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nombre, $email, $telefono, $direccion);
$stmt->execute();

header("Location: clientes.php");
exit;
