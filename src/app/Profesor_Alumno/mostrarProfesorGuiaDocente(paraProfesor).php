<?php
require_once '../includes/MySQL.inc';

$profesores = [];

if (isset($_GET['id_asignatura'])) {
    $id_asignatura = $_GET['id_asignatura'];

    $stmt = $conn->prepare("SELECT Nombre, Apellidos, Email FROM usuarios_proa 
                            INNER JOIN asignaturas ON usuarios_proa.id_usuarioproa = asignaturas.id_profesorasignatura 
                            WHERE asignaturas.id_asignatura = ?");
    $stmt->bind_param("i", $id_asignatura);
    $stmt->execute();
    $resultado = $stmt->get_result();

    while ($fila = $resultado->fetch_assoc()) {
        $profesores[] = $fila;
    }

    $stmt->close();
}
?>