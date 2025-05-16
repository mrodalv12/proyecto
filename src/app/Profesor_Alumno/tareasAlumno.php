<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tareas PROA</title>

    <link rel="preload" href="../../css/headeryfooterPROA.css" as="style" />
    <link rel="stylesheet" href="../../css/headeryfooterPROA.css" />
    <link rel="preload" href="../../css/MOVILmenu-Profesores_y_alumnos.css" as="style" />
    <link rel="stylesheet" href="../../css/MOVILmenu-Profesores_y_alumnos.css" />
    <link rel="stylesheet" href="../../css/tareasAlumno.css" />

<body>



    <!-- Header -->
    <?php include "../includes/header_proa.php" ?>



    <main>
        <section class="tasks-container">
            <h1>TAREAS</h1>
            <h2>Nombre de la Materia</h2>

            <table>
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Fecha de entrega</th>
                    <th>Estado</th>
                    <th>Calificación</th>
                    <th>Nombre del Autor</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="tareasContenido.php" class="task-link">TÍTULO DE LA TAREA</td>
                    <td>5 jun 2025</td>
                    <td>Entregado</td>
                    <td>8/10</td>
                    <td>Profesor</td>
                </tr>
                <tr>
                    <td><a href="tareasContenido.php" class="task-link">TÍTULO DE LA TAREA</td>
                    <td>6 jun 2025</td>
                    <td>No empezado</td>
                    <td>- /10</td>
                    <td>Profesor</td>
                </tr>
                </tbody>
            </table>
        </section>
    </main>

</body>

<!-- Footer -->
<?php include "../includes/footer_proa.php" ?>

</html>
