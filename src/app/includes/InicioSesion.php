<?php
session_start();  // Inicia la sesión al comienzo del archivo

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["usuario"], $_POST["contraseña"])) {
    $identificador = $_POST["usuario"]; // Puede ser nombre de usuario o correo
    $clave = $_POST["contraseña"];

    // Leer usuarios del archivo JSON
    $archivo = "usuarios.json";
    if (!file_exists($archivo)) {
        echo "<p>No hay usuarios registrados.</p>";
        exit;
    }



    $datos_json = file_get_contents($archivo);
    $usuarios = json_decode($datos_json, true);

    $usuario_encontrado = false;

    foreach ($usuarios as $u) {
        $coincideUsuario = $u["usuario"] === $identificador;
        $coincideCorreo = $u["correo"] === $identificador;

        // Dentro del bucle donde se verifica el usuario y la contraseña:
        if (($coincideUsuario || $coincideCorreo) && password_verify($clave, $u["contraseña"])) {
            // Guarda el usuario en la sesión
            $_SESSION["usuario"] = $u["usuario"];  // O el campo que desees guardar en la sesión
            $usuario_encontrado = true;
            break;
        }
    }

    if ($usuario_encontrado) {
        // Redirigir al usuario a la landing page después de un inicio de sesión exitoso
        header("Location: ../GTI/LandingPage.php");  // Cambia esto por la ruta correcta de tu landing page
        exit;  // Terminar la ejecución del script después de la redirección
    } else {
        echo "<p>Usuario o contraseña incorrectos.</p>";
    }
} else {
    echo "<p>Acceso no permitido</p>";
}
?>