<?php
include "../includes/funciones_inicio.php";
include "../includes/datos_usuario.php";
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROA</title>
    <link rel="stylesheet" href="../../../../../../Documents/UNI1/PROYECTO/proyecto/src/css/PROA/asignaturas.css">
    <link rel="stylesheet" href="../../css/header_footer.css">
    <link rel="stylesheet" href="../../../../../../Documents/UNI1/PROYECTO/proyecto/src/css/MOVILmenu-Profesores_y_alumnos.css">
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
                <button type="submit" id="iconoBuscar"><img src="../../../../../../Documents/UNI1/PROYECTO/proyecto/img/iconoBuscar.png" alt="icono_de_busqueda"></button>
        </div>
        <div class="espacio_de_asignaturas">
                <div class="item_asignatura"><a href="guiaDocenteAlumno.php"><p>Algebra y geometria matricial</p></a></div>
                <div class="item_asignatura"><a href="guiaDocenteAlumno.php"><p>Electronica basica</p></a></div>
                <div class="item_asignatura"><a href="guiaDocenteAlumno.php"><p>Fundamentos fisicos</p></a></div>
                <div class="item_asignatura"><a href="guiaDocenteAlumno.php"><p>Diseño e interfaz de usuario</p></a></div>
        </div>
    </main>
<!--footer-->
<?php include "../includes/footer_proa.php" ?>
<!--fin del footer-->
<script src="../../js/asignaturas.js"></script>
</body>
</html>