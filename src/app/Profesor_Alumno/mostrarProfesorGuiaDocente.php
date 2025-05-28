<?php
$profesores = [];

if (isset($id)) {
    $sqlProfesor = "SELECT u.Nombre, u.Apellidos, u.Correo 
                    FROM asignaturas a
                    JOIN usuarios_proa u ON a.id_profesorasignatura = u.id_usuarioproa
                    WHERE a.id_asignatura = ?";
    $stmtProf = $conn->prepare($sqlProfesor);
    $stmtProf->bind_param("i", $id);
    $stmtProf->execute();
    $resultadoProfesor = $stmtProf->get_result();

    while ($fila = $resultadoProfesor->fetch_assoc()) {
        $profesores[] = $fila;
    }
}
?>