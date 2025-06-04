<?php
session_start();
require_once '../../includes/MySQL.inc';

// Comprobar conexión
if (!isset($conn)) {
    die('Error de conexión a la base de datos.');
}

// Comprobar asignatura en sesión
if (!isset($_SESSION['asignatura']['id_asignatura'])) {
    die('No se ha seleccionado ninguna asignatura.');
}

$id_asignatura = $_SESSION['asignatura']['id_asignatura'];

// Obtener id_tarea desde GET y validar
if (!isset($_POST['id_tarea']) || !is_numeric($_POST['id_tarea'])) {
    die('No se ha especificado una tarea válida.');
}

$id_tarea = intval($_GET['id_tarea']);

// Procesar eliminación
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id_tarea'])) {
    $id_tarea = intval($_POST['id_tarea']);

    if (isset($_POST['eliminar'])) {
        // Eliminar entregas relacionadas primero
        $stmt_entregas = $conn->prepare("DELETE FROM entregas WHERE id_tarea = ?");
        $stmt_entregas->bind_param("i", $id_tarea);
        if (!$stmt_entregas->execute()) {
            die("Error al eliminar las entregas asociadas.");
        }
        $stmt_entregas->close();

        // Luego eliminar la tarea
        $stmt_tarea = $conn->prepare("DELETE FROM tareas WHERE id_tarea = ?");
        $stmt_tarea->bind_param("i", $id_tarea);

        if ($stmt_tarea->execute()) {
            $stmt_tarea->close();
            header("Location: ../../Profesor_Alumno/tareasProfesor.php");
            exit();
        } else {
            $stmt_tarea->close();
            die("Error al eliminar la tarea.");
        }
    }
}
?>
