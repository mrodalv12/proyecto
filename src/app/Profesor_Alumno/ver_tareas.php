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

// Definir el orden (por defecto A-Z)
$order = "ASC";
if (isset($_GET['orden']) && $_GET['orden'] === 'desc') {
    $order = "DESC";
}

// Consulta para obtener todas las tareas de la asignatura con orden
$sql = "SELECT id_tarea, Titulo, fecha_cierre, fecha_inicio 
        FROM tareas 
        WHERE id_asignatura = ? 
        ORDER BY Titulo $order";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idAsignatura);
$stmt->execute();
$result = $stmt->get_result();
?>


