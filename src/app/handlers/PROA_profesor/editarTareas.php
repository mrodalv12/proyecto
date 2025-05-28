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

// Verifica que se pasó una tarea por GET
if (!isset($_GET['id_tarea'])) {
    die("No se ha seleccionado ninguna tarea.");
}

$id_tarea = intval($_GET['id_tarea']);

// Si el formulario fue enviado (POST), actualizar la tarea
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];
    $instrucciones = $_POST['instrucciones'];

    $stmt = $conn->prepare("UPDATE tareas SET Titulo=?, fecha_cierre=?, Descripcion=?, Instrucciones=? WHERE id_tarea=? AND id_asignatura=?");
    $stmt->bind_param("ssssii", $titulo, $fecha, $descripcion, $instrucciones, $id_tarea, $id_asignatura);
    $stmt->execute();

    $mensaje = "Cambios guardados correctamente.";
}

// Cargar la tarea desde la base de datos
$stmt = $conn->prepare("SELECT * FROM tareas WHERE id_tarea = ?");
$stmt->bind_param("i", $id_tarea);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 0) {
    die("No se encontró la tarea.");
}

$tarea = $resultado->fetch_assoc();
?>