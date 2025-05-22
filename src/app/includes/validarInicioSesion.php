<?php
session_start();
require_once '../includes/MySQL.inc';  // Ajusta ruta si es necesario

if (!isset($conn)) die();

// Validar que se reciban datos del formulario
if (!isset($_POST['rol'], $_POST['correo'], $_POST['contraseña']) ||
    empty(trim($_POST['rol'])) || empty(trim($_POST['correo'])) || empty(trim($_POST['contraseña']))) {
    $_SESSION['error'] = 'campos_vacios';
    header('Location: ../InicioSesionProa.php');
    exit();
}

$rol = trim($_POST['rol']);
$correo = trim($_POST['correo']);
$password = trim($_POST['contraseña']);

// Validar que el rol sea válido
$roles_validos = ['pas', 'profesor', 'alumno'];
if (!in_array($rol, $roles_validos)) {
    $_SESSION['error'] = 'rol_invalido';
    header('Location: ../InicioSesionProa.php');
    exit();
}

// Primero obtenemos el id_cliente del usuario a partir del correo y rol
$stmt = $conn->prepare("SELECT id_cliente, Contraseña FROM usuarios_proa WHERE Correo = ? AND rol = ?");
$stmt->bind_param("ss", $correo, $rol);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
    // No existe usuario con ese correo y rol
    $_SESSION['error'] = 'usuario_no_encontrado';
    $stmt->close();
    header('Location: ../InicioSesionProa.php');
    exit();
}

$stmt->bind_result($idCliente, $hashed_password);
$stmt->fetch();

// Aquí asumimos que la contraseña en la base de datos está hasheada con SHA256 o como tú uses
$hash_input = hash('sha256', $password);

if ($hash_input !== $hashed_password) {
    $_SESSION['error'] = 'contrasena_incorrecta';
    $stmt->close();
    header('Location: /proyecto/InicioSesionProa.php');
    exit();
}

// Guardar datos en sesión, puedes guardar idCliente, correo, rol, etc.
$_SESSION['usuario_proa'] = [
    'id_cliente' => $idCliente,
    'correo' => $correo,
    'rol' => $rol
];

$stmt->close();

// Redirigir según el rol
switch ($rol) {
    case 'pas':
        header('Location: ../PROA/Inicio_PAS.php');
        break;
    case 'profesor':
        header('Location: ../PROA/tareasContenidoProfesor.php');
        break;
    case 'alumno':
        header('Location: ../PROA/tareasProfesor.php');
        break;
    default:
        // Por si acaso
        header('Location: ../InicioSesionProa.php');
        break;
}
exit();