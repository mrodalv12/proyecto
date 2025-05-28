<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tareas PROA</title>

    <link rel="preload" href="../../css/header_footerPROA.css" as="style" />
    <link rel="stylesheet" href="../../css/header_footerPROA.css" />
    <link rel="stylesheet" href="../../css/variablesPROA.css">
    <link rel="stylesheet" href="../../css/Alumno_Profesor/editarTareas.css" />
<body>



<!-- Header -->
<header>
    <?php include "../includes/header_proa_profesor.php" ?>
</header>

<?php include "../handlers/PROA_profesor/editarTareas.php" ?>
<?php include "../handlers/PROA_profesor/eliminarTareas.php" ?>
<main>
    <div class="container">
        <h2><a href="tareasProfesor.php">TAREAS</a></h2>
        <h3>Editar tarea</h3>

        <?php if (isset($mensaje)): ?>
            <div class="alert" style="color: green;"><?php echo $mensaje; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <input type="hidden" name="id_tarea" value="<?php echo $tarea['id_tarea']; ?>">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo htmlspecialchars($tarea['Titulo']); ?>" required>


            <label>Fecha de entrega: </label>
            <input type="date" name="fecha" value="<?php echo $tarea['fecha_cierre']; ?>" required>


            <label>Descripción:  </label>
            <textarea name="descripcion" required><?php echo htmlspecialchars($tarea['Descripcion']); ?></textarea>


            <label>Instrucciones:
                <textarea name="instrucciones" required><?php echo htmlspecialchars($tarea['Instrucciones']); ?></textarea>
            </label>
            <div class="botones">
                <button type="submit" class="botonbueno">Guardar cambios</button>

                <!-- Botón eliminar -->
                <button type="submit" name="eliminar" value="1" class="botonmalo" onclick="return confirm('¿Estás seguro de que quieres eliminar esta tarea?');">
                    Eliminar tarea
                </button>
            </div>

        </form>

    </div>
</main>

<footer>
    <?php include "../includes/footer_proa.php"; ?>
</footer>

</body>
</html>
