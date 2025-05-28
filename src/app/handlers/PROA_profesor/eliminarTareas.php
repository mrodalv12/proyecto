<?php
require_once '../includes/MySQL.inc';

// Comprobar asignatura en sesión
if (!isset($_SESSION['asignatura']['id_asignatura'])) {
    die('No se ha seleccionado ninguna asignatura.');
}

$id_asignatura = $_SESSION['asignatura']['id_asignatura'];

// Obtener id_tarea desde GET y validar
if (!isset($_GET['id_tarea']) || !is_numeric($_GET['id_tarea'])) {
    die('No se ha especificado una tarea válida.');
}

$id_tarea = intval($_GET['id_tarea']);


// Solo procesar si hay ID de tarea
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id_tarea'])) {
    $id_tarea = intval($_POST['id_tarea']);

    // Si se pulsó el botón de eliminar
    if (isset($_POST['eliminar'])) {
        $stmt = $conn->prepare("DELETE FROM tareas WHERE id_tarea = ?");
        $stmt->bind_param("i", $id_tarea);
        if ($stmt->execute()) {
            // Redirigir tras eliminar
            header("Location: ../../app/Profesor_Alumno/tareasProfesor.php");
            exit();
        } else {
            $mensaje = "Error al eliminar la tarea.";
        }
    }

   
}
?>