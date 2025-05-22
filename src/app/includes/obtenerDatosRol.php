<?php
session_start();
require_once '../includes/MySQL.inc';  // Ajusta ruta si hace falta

header('Content-Type: application/json');

if (!isset($conn)) die();

// Verificar usuario logueado
if (!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) {
    http_response_code(401);
    echo json_encode(['error' => 'No autorizado']);
    exit();
}

// Recoger el rol enviado vía POST
$rol = $_GET['rol'] ?? null;
if (!$rol || !in_array($rol, ['pas', 'profesor', 'alumno'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Rol inválido']);
    exit();
}

$usuarioLogueado = $_SESSION['usuario']['nombre'];

// Obtener id_cliente del usuario logueado
$stmt = $conn->prepare("SELECT id_cliente FROM usuarios WHERE nombre = ?");
$stmt->bind_param("s", $usuarioLogueado);
$stmt->execute();
$stmt->bind_result($idCliente);
if (!$stmt->fetch()) {
    http_response_code(404);
    echo json_encode(['error' => 'Usuario no encontrado']);
    exit();
}
$stmt->close();

// Buscar datos en usuarios_proa según id_cliente y rol
$stmt2 = $conn->prepare("SELECT Correo, Contraseña FROM usuarios_proa WHERE id_cliente = ? AND rol = ?");
$stmt2->bind_param("is", $idCliente, $rol);
$stmt2->execute();
$stmt2->bind_result($correo, $contrasena);
if ($stmt2->fetch()) {
    echo json_encode([
        'correo' => $correo,
        'contraseña' => $contrasena
    ]);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Datos no encontrados para este rol']);
}
$stmt2->close();
?>