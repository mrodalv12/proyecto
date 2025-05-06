<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
    <link rel="preload" href="../../css/Footer_Header_Noregistrado.css" as="style" />
    <link rel="stylesheet" href="../../css/Footer_Header_Noregistrado.css" />
  <link rel="stylesheet" href="../../css/RegistroGTI.css">
</head>
<body>

<!-- Header -->
<?php include "../includes/headerGTI.php" ?>

  <main class="main-container">
    <section class="form-box">
      <h2>Crea una cuenta</h2>
      <form id="registroForm" action="../includes/RegistroGTI.php" method="get">
        <label for="usuario">Nombre de usuario</label>

          <!-- El atributo name es lo que se envía al servidor, si no hay, no se envía nada, aunque tenga id -->
        <input type="text" id= "usuario" name="usuario" placeholder="Introduce tu nombre de usuario" required>

        <label for="correo">Correo electrónico</label>
        <input type="email" id="email" name="correo" placeholder="Introduce tu correo electrónico" required>

        <label for="contraseña">Contraseña</label>
        <input type="password" id="contraseña" name="contraseña" placeholder="Introduce una contraseña" required>

          <label for="confirmarContraseña">Contraseña</label>
          <input type="password" id="confirmarContraseña" name="confirmarContraseña" placeholder="Introduce una contraseña" required>


        <button type="submit">Crear cuenta</button>

        <p id="error" style="color: red; display: none;">Las contraseñas no coinciden.</p>

        <p id="mensajeRegistro"></p>
      </form>
      <p class="login-link">¿Ya tienes una cuenta? <a href="../GTI/InicioSesion.php">¡Inicia sesión!</a></p>
    </section>

   

    <section class="image-box">
      <img src="/img/Inicio_Registro.png" alt="Registro">
    </section>
  </main>

  <!-- Footer -->
  <?php include "../includes/footerGTI.php" ?>

  <?php include "../includes/RegistroGTI.php" ?>
    <script src="../../js/RegistroGTI.js"></script>

</body>
</html>