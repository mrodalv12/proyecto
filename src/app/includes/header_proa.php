<?php
include "datos_usuario.php";
?>
<!----------------------------------------------------------------------------------------------------------->
<header class="encabezado">
    <!-- Logo -->
    <?php if ($thisUser->rol=="PAS"):?>
        <a href="../PAS/Inicio_PAS.php" class="logo">
            <img src="../../../img/logoPROA.png" alt="proa" />
        </a>
    <?php elseif ($thisUser->rol=="Alumno"):?>
        <a href="../Profesor_Alumno/Inicio_Alumnos.php" class="logo">
            <img src="../../../img/logoPROA.png" alt="proa" />
        </a>
    <?php elseif ($thisUser->rol =="Profesor"):?>
        <a href="../Profesor_Alumno/Inicio_Profesor.php" class="logo">
            <img src="../../../img/logoPROA.png" alt="proa" />
        </a>
    <?php endif; ?>
    <!----------------------------------------------------------------------------------------------------------->
    <!-- Menú de navegación -->
    <nav class="cosas_del_header">
        <ul>
            <?php if($thisUser->rol =="PAS"): ?>
                <li class="enlaces_pas"><a href="../PAS/Solicitudes_PAS.php?esto=boton1pendientes">Solicitudes</a></li>
            <?php elseif($thisUser->rol == "Alumno" || $thisUser->rol == "Profesor"): ?>
                <li><a href="#">Asignaturas</a></li>
                <li><a href="#">Calendario</a></li>
                <li><a href="#">Solicitudes</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <nav class="MOVIL_cosas_del_header">
        <ul>
            <?php if($thisUser->rol == "Alumno" || $thisUser->rol == "Profesor"): ?>
                <li class="enlaces"><a href="#"><img src="../../../img/iconoAsignaturas.png" alt="Asignaruras"></a></li>
                <li class="enlaces"><a href="#"><img src="../../../img/iconoCalendario.png" alt="Calendario"></a></li>
                <li class="enlaces"><a href="#"><img src="../../../img/iconoSolicitudes.png" alt="Solicitudes"></a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <div class="perfil_notificaciones_pas">
        <ul>
            <li class="nombre_de_usuario">
                <a href="#">User</a>
                <ul>
                    <li><?php echo $thisUser->username?></li>
                    <li><?php echo $thisUser->correo?></li>
                    <li><?php echo $thisUser->rol?></li>
                    <li><a href="#">Cerrar sesión</a></li>
                </ul>
            </li>
            <li><a href="#"><img src="../../../img/iconoCampana.png" alt="campanita" class="notificaciones"/></a></li>
        </ul>
    </div>

    <!----------------------------------------------------------------------------------------------------------->
</header>
<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->