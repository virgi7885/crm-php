<?php
$host = "localhost";
$user = "root";
$password = "root"; // En MAMP por defecto la contraseña es "root"
$db = "crm_test";

// Crear conexión
$conn = new mysqli($host, $user, $password, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "✅ Conexión exitosa a la base de datos";
?>
