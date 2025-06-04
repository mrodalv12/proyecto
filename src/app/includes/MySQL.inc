<?php
// Conexión a la base de datos DE PLESK
//$host = "mrodalv.upv.edu.es";       // Cambia si tu host es diferente
//$usuario = "mrodalv_ftp-controlventas";         // Cambia según tu usuario de base de datos
//$contrasena = "RAMJ12062006";          // Cambia según tu contraseña
//$base_datos = "mrodalv_proyecto";  // Reemplaza con el nombre real de tu BD

$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "test";

// Detectar entorno
$isLocalhost = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false ||
    strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false ||
    strpos($_SERVER['HTTP_HOST'], '63342') !== false;

// Definir rutas base
define('EN_LOCAL', $isLocalhost);
define('BASE_URL', EN_LOCAL ? 'http://localhost:63342/proyecto/src/' : 'https://mrodalv.upv.edu.es/'); //PARA RUTAS HREF Y COSAS HTML
define('BASE_PATH', EN_LOCAL ? realpath(__DIR__ . '/../../') . '/' : $_SERVER['DOCUMENT_ROOT'] . '/'); //PARA INCLUDES, REQUIRE, ETC

// Activar flag por compatibilidad
$enlacesPLESK = !EN_LOCAL;

// Conexión
$conn = new mysqli($host, $usuario, $contrasena, $base_datos);
$conn->set_charset('utf8mb4');
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
