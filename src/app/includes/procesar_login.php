<?php
session_start();  // Inicia la sesión al comienzo del archivo

// Verifica si el usuario está logueado
$usuario_logueado = isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"]);

// Si se recibe el formulario por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recoger los datos del formulario
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];
    $rol = $_POST["rol"];

    // Cargar usuarios registrados desde el archivo JSON
    $archivoUsuarios = 'usuarios.json';
    if (file_exists($archivoUsuarios)) {
        $usuarios = json_decode(file_get_contents($archivoUsuarios), true);
    } else {
        echo "<p>Error: No se encuentra el archivo de usuarios registrados.</p>";
        exit;
    }

    // Comprobar si el rol seleccionado tiene usuarios registrados
    $usuarioEncontrado = false;
    foreach ($usuarios as $usuario) {
        if ($usuario['rol'] === $rol && $usuario['correo'] === $correo && $usuario['contraseña'] === $contraseña) {
            echo "<p>Bienvenido, " . $usuario['usuario'] . "!</p>";
            // Aquí podrías redirigir al usuario a una página interna
            $usuarioEncontrado = true;
            $_SESSION["usuario"] = $usuario['usuario']; // Guardamos al usuario en la sesión
            break;
        }
    }

    // Si no se encontró el usuario con esos datos, mostrar un mensaje de error
    if (!$usuarioEncontrado) {
        echo "<p>Datos incorrectos. Intenta de nuevo.</p>";
    }
}
?>