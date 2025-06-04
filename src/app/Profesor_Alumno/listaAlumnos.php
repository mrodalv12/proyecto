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
<?php include "../Profesor_Alumno/ver_listaAlumnos.php" ?>

<main>
    <section class="tablaAlumnos">
        <h1><a href="tareasProfesor.php">TAREAS:<?php echo htmlspecialchars($_SESSION['asignatura']['Nombre'] ?? 'Asignatura'); ?></a></h1>
        <h2>Tareas entregadas</h2>

        <table>
            <thead>
            <tr>
                <th>Alumnos</th>
                <th><?= htmlspecialchars($titulo_tarea) ?></th>
                <th>Fecha de entrega</th>
            </tr>
            </thead>
            <tbody>
            <?php while ($entrega = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($entrega['Nombre']) ?></td>
                    <td class="tarea-entregada">
                        <?php
                        $nombreArchivo = basename($entrega['archivo']);

                        //==========RUTA ARCHIVO WEB =============
                        $archivo_web = "/proyecto/adjuntos/" . rawurlencode($nombreArchivo); //rutas localhost
                        //$archivo_web = "/adjuntos/" . urlencode($nombreArchivo); //rutas plesk
                        //==========FIN DE RUTA ARCHIVO WEB=============

                        $archivo_servidor = $_SERVER['DOCUMENT_ROOT'] . "/adjuntos/" . $nombreArchivo;

                        //------PARA COMPROBAR LAS RUTAS --------
                        //echo "<p>Ruta web: $archivo_web</p>";
                        //echo "<p>Ruta servidor: $archivo_servidor</p>";
                        //------FIN DE COMPROBACION DE RUTAS --------
                        ?>

                        <?php if (!empty($entrega['archivo']) && file_exists($archivo_servidor)): ?>
                            <a href="<?= $archivo_web ?>" download>Descargar archivo</a>
                        <?php else: ?>
                            <p>no entregado.</p>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </section>
</main>

<?php include "../includes/footer_proa.php" ?>


</body>
</html>