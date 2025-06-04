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
</head>
<body>



<!-- Header -->
<header>
    <?php include "../includes/header_proa_profesor.php" ?>
    <?php include "../handlers/PROA_profesor/editarTareas.php" ?>
    <?php include "../handlers/PROA_profesor/eliminarTareas.php" ?>
</header>


<main>
    <div class="container">
        <h2><a href="tareasProfesor.php">TAREAS</a></h2>
        <h3>Editar tarea</h3>

        <?php if (!empty($mensaje)): ?>
            <div class="alert <?= $tipoMensaje ?: 'error' ?>">
                <?= htmlspecialchars($mensaje) ?>
            </div>
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

        </form>
        <!-- Botón eliminar -->
        <button type="button" class="botonmalo" id="btnEliminar">Eliminar tarea</button>
    </div>
    <form method="POST" action="" id="formEliminar" style="display: none;">
        <input type="hidden" name="eliminar" value="1">
        <input type="hidden" name="id_tarea" value="<?php echo $tarea['id_tarea']; ?>">
    </form>


    </div>
</main>

<footer>
    <?php include "../includes/footer_proa.php"; ?>
    <script src="../../js/PROA/ocultarMensajeTareas.js" defer></script>
    <script src="../../js/PROA/eliminarTarea.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</footer>

</body>
</html>