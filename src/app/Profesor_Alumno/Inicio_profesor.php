<?php
include "../includes/funciones_inicio.php";
?>
<!----------------------------------------------------------------------------------------------------------->
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROA</title>
    <link rel="stylesheet" href="../../css/Alumno_Profesor/inicio_profeAlum.css">
    <link rel="stylesheet" href="../../css/variablesPROA.css">
    <link rel="stylesheet" href="../../css/header_footerPROA.css">
</head>
<body>
<!--este es el header-->
<header>
    <?php include "../includes/header_proa_profesor.php" ?>
</header>
<!--fin del header-->
<!--Este es el inicio del contenido de la pagina-->
<section class="contenido">
    <!--saludo-->
    <div class="saludo">
        <h1>
            <?php
            $hola = buenas();
            $hey = htmlspecialchars($_SESSION['usuario_proa']['Nombre']);
            echo "¡$hola $hey !";
            ?></h1>
    </div>
    <!--fin del saludo-->
    <!--eventos de la semana-->
    <main>
        <div class="todos_los_eventos">
            <!--Lunes-->
            <div class="dia_de_la_semana" id="lunes">
                <div class="dia">
                    <p>Lunes</p>
                </div>
                <ol>
                    <li><a href="#"><p>tarea1: prototipo de ux y noseque mas</p></a></li>
                    <li><a href="#"><p>tarea2</p></a></li>
                </ol>
            </div>
            <!--Fin de lunes-->
            <!--Martes-->
            <div class="dia_de_la_semana" id="martes">
                <div class="dia">
                    <p>Martes</p>
                </div>
                <div id="no_hay_datos"><p>no hay<br>datos</p></div>
            </div>
            <!--Fin de martes-->
            <!--miercoles-->
            <div class="dia_de_la_semana" id="miercoles">
                <div class="dia">
                    <p>Miercoles</p>
                </div>
                <div id="no_hay_datos"><p>no hay<br>datos</p></div>
            </div>
            <!--fin de miercoles-->
            <!--jueves-->
            <div class="dia_de_la_semana" id="jueves">
                <div class="dia">
                    <p>jueves</p>
                </div>
                <div id="no_hay_datos"><p>no hay<br>datos</p></div>
            </div>
            <!--fin de jueves-->
            <!--viernes-->
            <div class="dia_de_la_semana" id="viernes">
                <div class="dia">
                    <p>Viernes</p>
                </div>
                <div id="no_hay_datos"><p>no hay<br>datos</p></div>
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