function mostrarContenido(id) {
    // Oculta todos los contenidos primero
    document.querySelectorAll('.bandeja').forEach(ol => {
        ol.classList.remove('activo');
    });
    // Muestra solo el que fue seleccionado
    document.getElementById(id).classList.add('activo');
}
