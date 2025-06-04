<?php
function procesarAdjunto() {
    //ini_set('display_errors', 1);  //esto es para ver los errores de php
    //ini_set('display_startup_errors', 1);
    //error_reporting(E_ALL);
    
    if (!isset($_SESSION['usuario_proa']) || $_SESSION['usuario_proa']['Rol'] !== 'Alumno') {
        return "No estás autenticado como alumno.";
    }

    $id_alumno = $_SESSION['usuario_proa']['id_usuarioproa'];

    if (empty($_FILES['adjunto']) || $_FILES['adjunto']['name'] == "") {
        return 'No se adjuntó ningún archivo.';
    }

    //=======cuidado con esto=================
    $fileUpload = $_FILES['adjunto'];
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/adjuntos/";  //ruta en localhost
    //$target_dir = "../../adjuntos/"; //para plesk
    $target_file = $target_dir . basename($fileUpload["name"]);
    //=======cuidado arriba=================

    if (!is_uploaded_file($fileUpload["tmp_name"])) {
        return 'El archivo no fue subido correctamente.';
    }

    if (file_exists($target_file)) return 'El archivo ya existe.';
    if ($fileUpload["size"] > 5 * 1024 * 1024) return 'El archivo adjunto es demasiado grande (máx. 5 MB).';

    $fileType = ['pdf', 'doc', 'docx', 'png'];
    $fileExtension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (!in_array($fileExtension, $fileType)) return 'El archivo debe ser PDF, Word o PNG.';

    if (!move_uploaded_file($fileUpload["tmp_name"], $target_file)) {
        $error = error_get_last();
        return 'No se pudo guardar el archivo. Error: ' . print_r($error, true);
    }

    require_once '../includes/MySQL.inc';
    global $conn;

    if (!isset($conn)) {
        return 'Error al conectar con la base de datos.';
    }

    if (!isset($_POST['id_tarea'])) {
        return 'Falta el ID de la tarea.';
    }

    define('HOST_URL', 'http://localhost/');
    $id_tarea = $_POST['id_tarea'];
    $href = basename($fileUpload['name']); // solo nombre del archivo
    $fecha_entrega = date('Y-m-d H:i:s');

    $stmt = $conn->prepare("INSERT INTO entregas (id_tarea, id_alumno, archivo, fecha_entrega) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiss", $id_tarea, $id_alumno, $href, $fecha_entrega);

    if (!$stmt->execute()) {
        $stmt->close();
        return "Error al guardar en la base de datos: " . $stmt->error;
    }

    $stmt->close();
    return "El archivo adjunto se ha guardado con éxito.";
}
?>




