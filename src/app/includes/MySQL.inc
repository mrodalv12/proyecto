<?php
// Conexión a la base de datos
$host = "localhost";       // Cambia si tu host es diferente
$usuario = "root";         // Cambia según tu usuario de base de datos
$contrasena = "";          // Cambia según tu contraseña
$base_datos = "test";  // Reemplaza con el nombre real de tu BD

$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

$conn->set_charset('utf8mb4');

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
