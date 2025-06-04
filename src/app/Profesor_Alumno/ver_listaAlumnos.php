<?php
require_once '../includes/MySQL.inc'; // Conexión a la base de datos


if (!isset($conn)) {
    die('Error de conexión a la base de datos.');
}

if (!isset($_SESSION['asignatura']['id_asignatura'])) {
    die('No se ha seleccionado ninguna asignatura.');
}

$id_asignatura = $_SESSION['asignatura']['id_asignatura'];

// Validar si se ha recibido un id_tarea por GET
if (!isset($_GET['id_tarea'])) {
    die("ID de tarea no proporcionado.");
}

$id_tarea = intval($_GET['id_tarea']); // sanitizar el valor

// Obtener la información de la tarea (opcional, para mostrar título)
$sql_tarea = "SELECT Titulo FROM tareas WHERE id_tarea = ?";
$stmt_tarea = $conn->prepare($sql_tarea);
$stmt_tarea->bind_param("i", $id_tarea);
$stmt_tarea->execute();
$resultado_tarea = $stmt_tarea->get_result();
$titulo_tarea = $resultado_tarea->fetch_assoc()['Titulo'] ?? 'Tarea Desconocida';
$stmt_tarea->close();

// Obtener las entregas de esta tarea
$sql = "SELECT 
            u.Nombre,
            e.fecha_entrega,
            e.archivo
        FROM entregas e
        JOIN usuarios_proa u ON e.id_alumno = u.id_usuarioproa
        WHERE e.id_tarea = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_tarea);
$stmt->execute();
$resultado = $stmt->get_result();
?>