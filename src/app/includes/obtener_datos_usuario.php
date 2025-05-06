<?php
// Verifica si se ha recibido el parámetro "rol" a través de GET
if (isset($_GET['rol'])) {
    $rol = $_GET['rol'];

    // Ruta al archivo de usuarios
    $archivoUsuarios = 'usuarios.json';

    // Verifica si el archivo existe
    if (file_exists($archivoUsuarios)) {
        // Cargar los usuarios del archivo JSON
        $usuarios = json_decode(file_get_contents($archivoUsuarios), true);

        // Filtrar los usuarios por rol
        foreach ($usuarios as $usuario) {
            if ($usuario['rol'] === $rol) {
                // Devolver los datos del usuario en formato JSON
                echo json_encode([
                    'email' => $usuario['correo'],
                    'password' => $usuario['contraseña']
                ]);
                exit; // Salir después de enviar la respuesta
            }
        }
    } else {
        echo json_encode(['error' => 'Archivo de usuarios no encontrado.']);
    }
} else {
    echo json_encode(['error' => 'Rol no especificado.']);
}
?>