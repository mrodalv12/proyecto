<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['error'])) {
    $mensaje = '';
    switch ($_SESSION['error']) {
        case 'campos_vacios':
            $mensaje = "Por favor, rellena todos los campos.";
            break;
        case 'email_registrado':
            $mensaje = "Este correo ya está registrado.";
            break;
        case 'contrasenas_diferentes':
            $mensaje = "Las contraseñas no coinciden.";
            break;
        case 'usuario_no_encontrado':
            $mensaje = "El correo no está registrado.";
            break;
        case 'contrasena_incorrecta':
            $mensaje = "La contraseña es incorrecta.";
            break;
        case 'guardar_error':
            $mensaje = "Hubo un error al guardar tu consulta.";
            break;
        default:
            $mensaje = "Ha ocurrido un error desconocido.";
    }

    echo "<div id='mensaje' class='mensaje-error'>$mensaje</div>";
    unset($_SESSION['error']);
}
?>