<?php

// Conexión a la base de datos
$host = "localhost";       // Cambia si tu host es diferente
$usuario = "root";         // Cambia según tu usuario de base de datos
$contrasena = "";          // Cambia según tu contraseña
$base_datos = "test";  // Reemplaza con el nombre real de tu BD

$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir y decodificar datos JSON
$datos = json_decode(file_get_contents("php://input"), true);

// Validación básica
if (!isset($datos['titulo']) || !isset($datos['fecha']) ) {
    echo json_encode(["mensaje" => "Faltan campos obligatorios."]);
    exit;
}

// Preparar y ejecutar la consulta
$stmt = $conn->prepare("INSERT INTO tareas (Titulo, fecha_cierre, Instrucciones, Descripcion) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $datos['titulo'], $datos['fecha'], $datos['instrucciones'], $datos['descripcion']);

if ($stmt->execute()) {
    echo json_encode(["mensaje" => "Tarea guardada con éxito."]);
} else {
    echo json_encode(["mensaje" => "Error al guardar la tarea."]);
}

$stmt->close();
$conn->close();
?>