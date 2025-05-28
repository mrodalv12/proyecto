<?php
require_once '../includes/MySQL.inc'; // Conexión a la base de datos

// Comprobar conexión
if (!isset($conn)) {
    die('Error de conexión a la base de datos.');
}

// Comprobar que la asignatura está en sesión
if (!isset($_SESSION['asignatura']['id_asignatura'])) {
    die('No se ha seleccionado ninguna asignatura.');
}

$id_tarea = $_GET['id_tarea'];

// Obtener la tarea
$stmt = $conn->prepare("SELECT * FROM tareas WHERE id_tarea = ?");
$stmt->bind_param("i", $id_tarea);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 0) {
    echo "Tarea no encontrada.";
    exit;
}

$tarea = $resultado->fetch_assoc();
?>