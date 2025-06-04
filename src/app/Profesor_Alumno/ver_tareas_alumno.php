<?php
require_once '../includes/MySQL.inc'; // Este archivo debe definir $conn
// Comprobar conexión
if (!isset($conn)) {
    die('Error de conexión a la base de datos.');
}

// Obtener el ID de la asignatura desde la sesión
$id_asignatura = $_SESSION['asignatura']['id_asignatura'] ?? null;

// Inicializar variables
$tareas = [];
$nombre_asignatura = '';

if ($id_asignatura) {
    // Obtener el nombre de la asignatura
    $stmt = $conn->prepare("SELECT Nombre FROM asignaturas WHERE id_asignatura = ?");
    $stmt->bind_param("i", $id_asignatura);
    $stmt->execute();
    $stmt->bind_result($nombre_asignatura);
    $stmt->fetch();
    $stmt->close();

    // Obtener tareas asociadas a esa asignatura
    $stmt = $conn->prepare("SELECT id_tarea, Titulo, fecha_cierre FROM tareas WHERE id_asignatura = ?");
    $stmt->bind_param("i", $id_asignatura);
    $stmt->execute();
    $result = $stmt->get_result();
    $tareas = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
} else {
    $nombre_asignatura = 'Asignatura no seleccionada';
}