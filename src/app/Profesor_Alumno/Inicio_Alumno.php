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
    <link rel="stylesheet" href="../../css/inicio_profeAlum.css">
    <link rel="stylesheet" href="../../css/header_footer.css">
    <link rel="stylesheet" href="../../css/MOVILmenu-Profesores_y_alumnos.css">
</head>
<body>
<header>
    <?php include "../includes/header_proa_alumno.php"?>
</header>
<main class="contenido">
    <div class="saludo">
        <!--saludo-->
        <h1>
            <?php
            $hola = buenas();
            echo "¡¡ $hola usuario !!";
            ?></h1>
    </div>
    <!--fin del saludo-->
    <!--eventos de la semana-->
    <div>
        <h2>Eventos de la semana</h2>
        <div class="todos_los_eventos">
            <div class="dia_de_la_semana" id="lunes">
                <h3>Lunes</h3>
                <ol>
                    <li><a href="#"><p>tarea1</p></a></li>
                    <li><a href="#"><p>tarea2</p></a></li>
                </ol>
            </div>
            <div class="dia_de_la_semana" id="martes">
                <h3>Martes</h3>
                <p id="no_hay_datos">no hay<br>datos</p>
            </div>
            <div class="dia_de_la_semana" id="miercoles">
                <h3>Miercoles</h3>
                <p id="no_hay_datos">no hay<br>datos</p>
            </div>
            <div class="dia_de_la_semana" id="jueves">
                <h3>jueves</h3>
                <p id="no_hay_datos">no hay<br>datos</p>
            </div>
            <div class="dia_de_la_semana" id="viernes">
                <h3>Viernes</h3>
                <p id="no_hay_datos">no hay<br>datos</p>
            </div>
            <div class="dia_de_la_semana" id="finde">
                <h3>Fin de semana</h3>
                <p id="no_hay_datos">no hay<br>datos</p>
            </div>
        </div>
    </div>
</main>


<footer>
    <?php include "../includes/footer_proa.php"?>
</footer>

</body>
</html>

