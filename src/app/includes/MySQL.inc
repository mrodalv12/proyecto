<?php
// Conexión a la base de datos
//$host = "mrodalv.upv.edu.es";       // Cambia si tu host es diferente
//$usuario = "mrodalv_mrodalv";         // Cambia según tu usuario de base de datos
//$contrasena = "RAMJ12062006";          // Cambia según tu contraseña
//$base_datos = "mrodalv_proyecto";  // Reemplaza con el nombre real de tu BD

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
