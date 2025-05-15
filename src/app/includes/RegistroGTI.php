<?php
// Solo procesar si se recibe el formulario por POST
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["usuario"], $_POST["correo"], $_POST["contraseña"])) {
    // Recoger datos del formulario
    $usuario = $_POST["usuario"];
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];
    $confirmarContraseña = $_POST["confirmarContraseña"];

    // Comprobar si las contraseñas coinciden
    if ($contraseña !== $confirmarContraseña) {
        echo "<p>Las contraseñas no coinciden. Intenta de nuevo.</p>";
        exit;
    }

    // Encriptar la contraseña
    $contraseñaHash = password_hash($contraseña, PASSWORD_DEFAULT);

    // Archivo con usuarios predefinidos
    $archivoUsuarios = 'usuarioProa.json';
    if (!file_exists($archivoUsuarios)) {
        echo "<p>Error: No se encuentra el archivo de usuarios predefinidos.</p>";
        exit;
    }

    $usuarios_predefinidos = json_decode(file_get_contents($archivoUsuarios), true);

    // Validar estructura de usuarios predefinidos
    if (!isset($usuarios_predefinidos['alumno'], $usuarios_predefinidos['profesor'], $usuarios_predefinidos['pas'])) {
        echo "<p>Error: Los usuarios predefinidos no están definidos correctamente.</p>";
        exit;
    }

    // Leer usuarios existentes o crear array vacío
    $archivo = "usuarios.json";
    $usuarios = file_exists($archivo) ? json_decode(file_get_contents($archivo), true) : [];
    if (!is_array($usuarios)) {
        $usuarios = [];
    }

    // Verificar si el usuario ya existe
    foreach ($usuarios as $u) {
        if ($u["usuario"] === $usuario) {
            echo "<p>El nombre de usuario ya está registrado.</p>";
            exit;
        }
    }

    // Función para obtener un usuario aleatorio
    function obtenerUsuarioAleatorio($array) {
        return $array[array_rand($array)];
    }

    // Obtener uno de cada rol
    $alumno  = obtenerUsuarioAleatorio($usuarios_predefinidos['alumno']);
    $profesor = obtenerUsuarioAleatorio($usuarios_predefinidos['profesor']);
    $pas      = obtenerUsuarioAleatorio($usuarios_predefinidos['pas']);

    // Preparar entradas completas
    foreach ([$alumno, $profesor, $pas] as $usuarioBase) {
        $registro = $usuarioBase;
        $registro["usuario"] = $usuario;
        $registro["correo"] = $correo;
        $registro["contraseña"] = $contraseñaHash;

        // Eliminar la contraseña en texto plano si existe
        unset($registro["password"]);

        $usuarios[] = $registro;
    }

    // Guardar el archivo actualizado
    file_put_contents($archivo, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    // Redirigir al login
    header("Location: ../GTI/InicioSesion.php");
    exit;
}
?>