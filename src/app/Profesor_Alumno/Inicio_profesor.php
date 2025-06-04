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
    <div class="bienvenido">
        <p>
            <strong>Bienvenido a PROA,</strong> tu plataforma educativa digital.
            Aquí encontrarás un espacio pensado para facilitar el trabajo diario tanto a profesores como a alumnos. Desde este entorno, podrás acceder de forma rápida a tus asignaturas, tareas y recursos, todo organizado para ayudarte a centrarte en lo importante: aprender y enseñar.
            <br><br>
            Si eres alumno, podrás consultar tus clases, ver qué trabajos tienes que entregar, revisar tus notas y estar siempre al día con lo que pasa en cada materia. Si eres profesor, podrás gestionar tus asignaturas, publicar actividades, hacer un seguimiento del progreso de tus estudiantes y mantener una comunicación clara con ellos.
            <br><br>
            Estamos trabajando para seguir mejorando PROA. Muy pronto añadiremos nuevas funcionalidades, como un sistema de mensajes interno, avisos personalizados, y más herramientas para que la experiencia de enseñanza y aprendizaje sea aún más completa y cómoda.
        </p>

        <img src="../../img/bienvenida.svg" alt="Imagen de bienvenida">

    </div>
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