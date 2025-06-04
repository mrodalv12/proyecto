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

$id_asignatura = $_SESSION['asignatura']['id_asignatura'];
$mensaje = '';
if (isset($_GET['tarea']) && $_GET['tarea'] === 'ok') {
    $mensaje = 'La tarea se ha agregado correctamente.';
}

// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim($_POST['titulo']);
    $fecha = $_POST['fecha'];
    $descripcion = trim($_POST['descripcion']);
    $instrucciones = trim($_POST['instrucciones']);
    $fecha_inicio = date('Y-m-d H:i:s'); // Fecha actual


    if ($titulo && $fecha && $descripcion && $instrucciones) {
        $stmt = $conn->prepare("INSERT INTO tareas (Titulo, fecha_cierre, Descripcion, Instrucciones, id_asignatura, fecha_inicio) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $titulo, $fecha, $descripcion, $instrucciones, $id_asignatura, $fecha_inicio);

        if ($stmt->execute()) {
            header("Location: ../Profesor_Alumno/agregarTareas.php?tarea=ok");
            exit;
        } else {
            $mensaje = "Error al agregar la tarea.";
        }
    } else {
        $mensaje = "Todos los campos son obligatorios.";
    }
}
?>