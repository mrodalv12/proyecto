function enviarFormulario(event) {
    event.preventDefault();

    const correo = document.getElementById('correo').value.trim();
    const asunto = document.getElementById('asunto').value.trim();
    const mensaje = document.getElementById('mensaje').value.trim();
    const mensajeAviso = document.getElementById('mensajeAviso');

    if (!correo || !asunto || !mensaje) {
        mensajeAviso.textContent = 'Por favor, completa todos los campos.';
        mensajeAviso.classList.remove('oculto');
        mensajeAviso.classList.add('mensaje-error');
        return false;
    }

    const datos = new FormData();
    datos.append('correo', correo);
    datos.append('asunto', asunto);
    datos.append('mensaje', mensaje);

    fetch('app/handlers/guardarCosultaContacto.php', {
        method: 'POST',
        body: datos
    })
        .then(res => {
            if (!res.ok) {
                throw new Error('Error en el envío');
            }
            return res.text();
        })
        .then(() => {
            // Limpiar campos del formulario
            document.getElementById('correo').value = '';
            document.getElementById('asunto').value = '';
            document.getElementById('mensaje').value = '';

            // Mostrar mensaje de éxito
            mensajeAviso.textContent = '¡Consulta enviada correctamente!';
            mensajeAviso.classList.remove('oculto');
            mensajeAviso.classList.remove('mensaje-error');
            mensajeAviso.classList.add('mensaje-exito');

            // Opcional: ocultar mensaje después de 5 segundos
            setTimeout(() => {
                mensajeAviso.classList.add('oculto');
            }, 5000);
        })
        .catch(err => {
            mensajeAviso.textContent = 'Ocurrió un error al enviar la consulta.';
            mensajeAviso.classList.remove('oculto');
            mensajeAviso.classList.remove('mensaje-exito');
            mensajeAviso.classList.add('mensaje-error');
            console.error(err);
        });

    return false;
}