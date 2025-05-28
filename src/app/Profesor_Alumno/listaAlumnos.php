<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Entregar Tareas</title>
    <link rel="preload" href="../../css/header_footerPROA.css" as="style" />
    <link rel="stylesheet" href="../../css/header_footerPROA.css" />
    <link rel="stylesheet" href="../../css/variablesPROA.css">
    <link rel="stylesheet" href="../../css/Alumno_Profesor/listaAlumnos.css" />
</head>
<body>

<!-- Header -->
<?php include "../includes/header_proa_profesor.php" ?>

<main>
    <section class="tablaAlumnos">
        <h1><a href="tareasProfesor.php">TAREAS</a></h1>
        <h2>Tareas entregadas</h2>

        <table>
            <thead>
            <tr>
                <th>Alumnos</th>
                <th>Calificación</th>
                <th>Estado</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Alumno 1</td>
                <td>7/10</td>
                <td class="tarea-entregada"><a href="tareasContenidoProfesor.php">Entregado</a></td>
            </tr>
            <tr>
                <td>Alumno 2</td>
                <td>-/10</td>
                <td class="no-entregado">No entregado</td>
            </tr>
            <tr>
                <td>Alumno 3</td>
                <td>-/10</td>
                <td class="tarea-entregada"><a href="tareasContenidoProfesor.php">Entregado</a></td>
            </tr>
            <tr>
                <td>Alumno 4</td>
                <td>-/10</td>
                <td class="tarea-entregada"><a href="tareasContenidoProfesor.php">Entregado</a></td>
            </tr>
            <tr>
                <td>Alumno 5</td>
                <td>-/10</td>
                <td class="tarea-entregada"><a href="tareasContenidoProfesor.php">Entregado</a></td>
            </tr>
            <tr>
                <td>Alumno 6</td>
                <td>-/10</td>
                <td class="tarea-entregada"><a href="tareasContenidoProfesor.php">Entregado</a></td>
            </tr>
            </tbody>
        </table>
    </section>
</main>

<?php include "../includes/footer_proa.php" ?>


</body>
</html>