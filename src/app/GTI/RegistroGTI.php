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
      <form id="registroForm">
        <label>Nombre de usuario</label>
        <input type="text" id= "nombre" placeholder="Introduce tu nombre de usuario" required>

        <label>Correo electrónico</label>
        <input type="email" id="email" placeholder="Introduce tu correo electrónico" required>

        <label>Contraseña</label>
        <input type="password" id="password" placeholder="Introduce una contraseña" required>

        <label>Confirmación de contraseña</label>
        <input type="password" id= "confirmarPassword" placeholder="Vuelve a introducir la contraseña" required>

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

  <script src="../../js/RegistroGTI.js"></script>
</body>
</html>