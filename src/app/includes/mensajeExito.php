<?php
if (isset($_POST['registro']) && $_POST['registro'] === 'ok') {
    echo "<div id='mensaje' class='mensaje-exito'>¡Registro exitoso! Ahora puedes iniciar sesión.</div>";
}
?>