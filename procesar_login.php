<?php
session_start();
require 'conexion.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
  $usuario = $result->fetch_assoc();
  
  if (password_verify($password, $usuario['password'])) {
    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['usuario_nombre'] = $usuario['nombre'];
    $_SESSION['usuario_rol'] = $usuario['rol'];
    header("Location: panel.php");
    exit;
  }
}

echo "Credenciales incorrectas.";
?>
