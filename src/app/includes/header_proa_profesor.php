<?php
session_start();
?>
<!----------------------------------------------------------------------------------------------------------->
<header class="encabezado">
    <!-- Logo -->
    <a href="../Profesor_Alumno/Inicio_profesor.php" class="logo">
        <img src="../../img/logoPROA.png" alt="proa" />
    </a>
    <!----------------------------------------------------------------------------------------------------------->
    <!-- Menú de navegación -->
    <nav class="cosas_del_header">
        <ul>
            <li><a href="../Profesor_Alumno/asignaturas_profe.php">Asignaturas</a></li>
        </ul>
    </nav>
    <div class="perfil_notificaciones">
        <ul>
            <li class="nombre_de_usuario">
                <a href="#"> <?php echo htmlspecialchars($_SESSION['usuario_proa']['Nombre']); ?></a>
                <ul>
                    <li><?php echo htmlspecialchars($_SESSION['usuario_proa']['Nombre']); ?></li>
                    <li><?php echo htmlspecialchars($_SESSION['usuario_proa']['Correo']); ?></li>
                    <li><?php echo htmlspecialchars($_SESSION['usuario_proa']['Rol']); ?></li>
                    <li><a href="../includes/cerrarSesion.php">Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <!----------------------------------------------------------------------------------------------------------->
</header>
<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->