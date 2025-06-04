<?php
session_start();
require_once '../includes/MySQL.inc';

if (!isset($_SESSION['usuario_proa'])) {
    header("Location: ../../InicioSesionProa.php");
    exit();
}

$usuario = $_SESSION['usuario_proa'];
$id_usuario = $usuario['id_usuarioproa'];
$rol = $usuario['Rol'];

// Obtener filtros y búsqueda
$busqueda = $_GET['busqueda'] ?? '';
$cursos = $_GET['curso'] ?? [];
$semestres = $_GET['semestre'] ?? [];

// Construcción de la consulta SQL
$sql = "SELECT a.id_asignatura, a.Nombre, a.Curso, a.Cuatrimestre
        FROM asignaturas a
        INNER JOIN matricula m ON a.id_asignatura = m.id_asignatura
        WHERE m.id_usuarioproa = ?";

$parametros = [$id_usuario];
$tipos = "i";

// Filtro de búsqueda
if (!empty($busqueda)) {
    $sql .= " AND a.Nombre LIKE ?";
    $parametros[] = '%' . $busqueda . '%';
    $tipos .= "s";
}

// Filtro por curso
if (!empty($cursos)) {
    $placeholders = implode(',', array_fill(0, count($cursos), '?'));
    $sql .= " AND a.Curso IN ($placeholders)";
    foreach ($cursos as $c) {
        $parametros[] = $c;
        $tipos .= "s";
    }
}

// Filtro por semestre
if (!empty($semestres)) {
    $placeholders = implode(',', array_fill(0, count($semestres), '?'));
    $sql .= " AND a.Cuatrimestre IN ($placeholders)";
    foreach ($semestres as $s) {
        $parametros[] = $s;
        $tipos .= "s";
    }
}

// Obtener resultados y preparar el HTML de la tabla
$tablaAsignaturas = '';

if ($rol === 'Profesor') {
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($tipos, ...$parametros);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $id_asignatura = $fila['id_asignatura'];
            $nombre = htmlspecialchars($fila['Nombre']);
            $curso = htmlspecialchars($fila['Curso']);
            $cuatrimestre = htmlspecialchars($fila['Cuatrimestre']);

            $tablaAsignaturas .= "<tr>
            <td class='nom_column'><a href='guiaDocenteprofesor.php?id_asignatura={$id_asignatura}'>{$nombre}</a></td>
            <td class='curs_column'>{$curso}</td>
            <td class='semes_column'>{$cuatrimestre}</td>
        </tr>";
        }

    } else {
        $tablaAsignaturas .= "<tr><td colspan='3'>No se encontraron asignaturas.</td></tr>";
    }

    $stmt->close();
} else {
    $tablaAsignaturas .= "<tr><td colspan='3'>Esta página es solo para alumnos.</td></tr>";
}