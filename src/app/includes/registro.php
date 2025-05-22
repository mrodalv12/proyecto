<?php
require_once '../includes/MySQL.inc';
session_start();

if (!isset($conn)) die();

// Asegúrate de que los campos estén definidos y no estén vacíos
if (
    !isset($_POST['nombre'], $_POST['email'], $_POST['password'], $_POST['confirmarContraseña']) ||
    empty(trim($_POST['nombre'])) ||
    empty(trim($_POST['email'])) ||
    empty(trim($_POST['password'])) ||
    empty(trim($_POST['confirmarContraseña']))
) {
    $_SESSION['error'] = "campos_vacios";
    header("Location: /proyecto/RegistroGTI.php");
    exit();
}

// Comprobar que las contraseñas coinciden
if ($_POST['password'] !== $_POST['confirmarContraseña']) {
    $_SESSION['error'] = "contrasenas_diferentes";
    header("Location: /proyecto/RegistroGTI.php");
    exit();
}

// Verificar si el email ya existe
$email = trim($_POST['email']);
$stmt = $conn->prepare("SELECT id_cliente FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->close();
    $_SESSION['error'] = "email_registrado";
    header("Location: /proyecto/RegistroGTI.php");
    exit();
}
$stmt->close();

// Insertar nuevo usuario
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, SHA2(?, 256))");
$stmt->bind_param("sss", $_POST['nombre'], $_POST['email'], $_POST['password']);
$stmt->execute();

// Aquí obtenemos el id del usuario insertado
$idUsuarioNuevo = $stmt->insert_id;

$stmt->close();

$roles = ["pas", "profesor", "alumno"];

foreach ($roles as $rol) {
    // Buscar un usuario PROA disponible para ese rol (sin id_cliente asignado)
    $stmt = $conn->prepare("SELECT id_usuarioproa, correo, contraseña FROM usuarios_proa WHERE rol = ? AND id_cliente IS NULL LIMIT 1");
    $stmt->bind_param("s", $rol);
    $stmt->execute();
    $stmt->bind_result($idProa, $correoProa, $contrasenaProa);

    if ($stmt->fetch()) {
        $stmt->close();

        // Actualizar esa fila para asignar el nuevo usuario registrado
        $stmt2 = $conn->prepare("UPDATE usuarios_proa SET id_cliente = ? WHERE id_usuarioproa = ?");
        $stmt2->bind_param("ii", $idUsuarioNuevo, $idProa);
        $stmt2->execute();
        $stmt2->close();

    } else {
        $stmt->close();
        $_SESSION['error'] = "no_hay_usuarios_disponibles_para_$rol";
        header("Location: /proyecto/RegistroGTI.php");
        exit();
    }
}


header("Location: /proyecto/InicioSesionGTI.php?registro=ok");
exit();
?>