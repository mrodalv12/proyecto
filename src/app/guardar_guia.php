<?php
//Recoge los datos que se mandan desde el navegador y convierte el texto en estructura de datos php
$datos = json_decode(file_get_contents("php://input"), true);
//Guarda esos datos en un archivo llamado guia_docente.json. Si el archivo no existe, lo crea. Si ya existe, lo
// sobrescribe con los nuevos datos y convierte el array de php de nuevo en json
file_put_contents("guia_docente.json", json_encode($datos, JSON_PRETTY_PRINT));
?>