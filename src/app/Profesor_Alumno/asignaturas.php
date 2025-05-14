<?php
include "../includes/funciones_inicio.php";
include "../includes/datos_usuario.php";

if ($thisUser->rol != "Alumno" && $thisUser->rol != "Profesor") {
    echo "Acceso denegado. No tienes permisos para ver esta página.";
    exit();
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROA</title>
    <link rel="stylesheet" href="../../css/asignaturas.css">
    <link rel="stylesheet" href="../../css/header_footer.css">
    <link rel="stylesheet" href="../../css/MOVILmenu-Profesores_y_alumnos.css">
</head>
<body>
<!--encabezado-->
<?php include "../includes/header_proa.php" ?>
<!--fin del encabezado-->

    <main>
        <h1>Asignaturas</h1>
        <div class="buscador">
            <div>
                <label for="materia"><p>Busqueda</p></label>
            <input type="search" id="materia" placeholder=" Nombre de una materia" required/>
            </div>
                <button type="submit" id="iconoBuscar"><img src="../../../img/iconoBuscar.png" alt="icono_de_busqueda"></button>
        </div>
        <div class="espacio_de_asignaturas">
            <?php if ($thisUser->rol == "Alumno"):?>
                <div class="item_asignatura"><a href="#"><p>Algebra y geometria matricial</p></a></div>
                <div class="item_asignatura"><a href="#"><p>Electronica basica</p></a></div>
                <div class="item_asignatura"><a href="#"><p>Fundamentos fisicos</p></a></div>
                <div class="item_asignatura"><a href="#"><p>Diseño e interfaz de usuario</p></a></div>
            <?php elseif ($thisUser->rol == "Profesor"):?>
                <div class="item_asignatura"><a href="#"><p>Algebra y geometria matricial</p></a></div>
                <div class="item_asignatura"><a href="#"><p>Proyecto, diseño y programacion web</p></a></div>
                <div class="item_asignatura"><a href="#"><p>asignatura</p></a></div>
                <div class="item_asignatura"><a href="#"><p>Diseño e interfaz de experiencia de usuario</p></a></div>
                <div class="item_asignatura"><a href="#"><p>asignatura</p></a></div>
                <div class="item_asignatura"><a href="#"><p>programacion 2</p></a></div>
                <div class="item_asignatura"><a href="#"><p>asignatura</p></a></div>
                <div class="item_asignatura"><a href="#"><p>Redes y servicios telematicos</p></a></div>
                <div class="item_asignatura"><a href="#"><p>asignatura</p></a></div>
                <div class="item_asignatura"><a href="#"><p>programacion 2</p></a></div>
                <div class="item_asignatura"><a href="#"><p>asignatura</p></a></div>
                <div class="item_asignatura"><a href="#"><p>Redes y servicios telematicos</p></a></div>
            <?php endif; ?>
        </div>
    </main>
<!--footer-->
<?php include "../includes/footer_proa.php" ?>
<!--fin del footer-->
<script src="../../js/asignaturas.js"></script>
</body>
</html>