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

$idAsignatura = intval($_SESSION['asignatura']['id_asignatura']);

// Consulta para obtener todas las tareas de la asignatura
$sql = "SELECT id_tarea, Titulo, fecha_cierre FROM tareas WHERE id_asignatura = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idAsignatura);
$stmt->execute();
$result = $stmt->get_result();

?>
