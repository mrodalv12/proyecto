<?php
include "../includes/funciones_inicio.php";
include "../includes/datos_usuario.php";
?>
<!----------------------------------------------------------------------------------------------------------->
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROA</title>
    <link rel="preload" href="../../css/Alumno_Profesor/inicio_profeAlum.css" as="style" />
    <link rel="stylesheet" href="../../css/variablesPROA.css">
    <link rel="stylesheet" href="../../css/Alumno_Profesor/inicio_profeAlum.css">
    <link rel="stylesheet" href="../../css/header_footerPROA.css">
    <link rel="stylesheet" href="../../css/Alumno_Profesor/MOVILmenu-Profesores_y_alumnos.css">
</head>
<body>
<!--este es el header-->
<header>
    <?php include "../includes/header_proa_alumno.php" ?>
</header>
<!--fin del header-->
<!--Este es el inicio del contenido de la pagina-->
<section class="contenido">
    <!--saludo-->
    <div class="saludo">
        <h1>
            <?php
            $hola = buenas();
            echo "¡¡ $hola < usuario > !!";
            ?></h1>
    </div>
    <!--fin del saludo-->
    <!--eventos de la semana-->
    <main>
        <div class="todos_los_eventos">
            <!--Lunes-->
            <div class="dia_de_la_semana" id="lunes">
                <h3>Lunes</h3>
                <ol>
                    <li><a href="#"><p>tarea1</p></a></li>
                    <li><a href="#"><p>tarea2</p></a></li>
                </ol>
            </div>
            <!--Fin de lunes-->
            <!--Martes-->
            <div class="dia_de_la_semana" id="martes">
                <h3>Martes</h3>
                <p id="no_hay_datos">no hay<br>datos</p>
            </div>
            <!--Fin de martes-->
            <!--miercoles-->
            <div class="dia_de_la_semana" id="miercoles">
                <h3>Miercoles</h3>
                <p id="no_hay_datos">no hay<br>datos</p>
            </div>
            <!--fin de miercoles-->
            <!--jueves-->
            <div class="dia_de_la_semana" id="jueves">
                <h3>jueves</h3>
                <p id="no_hay_datos">no hay<br>datos</p>
            </div>
            <!--fin de jueves-->
            <!--viernes-->
            <div class="dia_de_la_semana" id="viernes">
                <h3>Viernes</h3>
                <p id="no_hay_datos">no hay<br>datos</p>
            </div>
            <!--fin de viernes-->
        </div>
    </main>
    <!--fin de eventos de la semana-->
</section>
<!--fin del contenido de la pagina-->
<!--este es el footer-->
<footer>
    <?php include "../includes/footer_proa.php"?>
</footer>
<!-- fin del footer -->

</body>
</html>

