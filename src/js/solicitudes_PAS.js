


function mostrarContenido(id) {
    document.querySelectorAll('[id^="solicitud_"]').forEach(solicitud => {
        solicitud.classList.remove('activo');
        solicitud.classList.remove('activo2');
        document.getElementById("sin_contenido_desplegado").style.display = "flex";

    });
    let hayElementos = false;

    const elementos = document.querySelectorAll(`[id^="${id}"]`);
    elementos.forEach(elemento => {
        elemento.classList.add('activo');
        hayElementos = true;
    });
    const mensajeVacio = document.getElementById("bandeja_vacia");
    if (mensajeVacio) {
        mensajeVacio.style.display = hayElementos ? "none" : "flex";
    }
}

//---------------------------------------------------------------------------------
function mostrarContenido2(id) {
    document.querySelectorAll('[id^="solicitud_desplegada_"]').forEach(solicitud => {
        solicitud.classList.remove('activo2');
    });
    const elemento = document.querySelectorAll(`[id^="solicitud_desplegada_${id}"]`);
    const mensajeVaciodesplegado = document.getElementById("sin_contenido_desplegado");

    if (elemento.length > 0) {
        elemento.forEach(el => {
            el.classList.add('activo2');
        });
        if (mensajeVaciodesplegado) mensajeVaciodesplegado.style.display = "none";
    } else {
        if (mensajeVaciodesplegado) mensajeVaciodesplegado.style.display = "flex";
    }
}
//---------------------------------------------------------------------------------
function activarEstilo(elemento) {
    // Quitar la clase 'activo' de todos los enlaces
    document.querySelectorAll('.bandeja_columna1 a').forEach(a => {
        a.classList.remove('activo');
    });
    document.querySelectorAll('.MOVIL_bandeja a').forEach(a => {
        a.classList.remove('activo');
    });

    document.querySelectorAll('.columna_2 .bandeja a').forEach(a => {
        a.classList.remove('color');
    });
    // Agregar clase al que fue clickeado
    elemento.classList.add('activo');
}
//---------------------------------------------------------------------------------
function activarEstilo2(elemento) {
    // Quitar la clase 'activo' de todos los enlaces
    document.querySelectorAll('.columna_2 .bandeja a').forEach(a => {
        a.classList.remove('color');
    });
    // Agregar clase al que fue clickeado
    elemento.classList.add('color');
}
//---------------------------------------------------------------------------------
function activarBotonDesdeInicioPas() {
    const params = new URLSearchParams(window.location.search);
    const seccionActiva = params.get("seccion");
    const boton2activo = seccionActiva.replace("_desplegada", "");

    if (seccionActiva) {
        const boton = document.getElementById(seccionActiva);
        const boton2 = document.getElementById(boton2activo);
        const seccion2 = document.querySelectorAll(`[id^="solicitud_pendiente_"]`)
        if (boton) {
            boton.classList.add("activo2");
            boton2.classList.add("color")
            seccion2.forEach(botones => {
                botones.classList.add('activo');
            });
            document.getElementById("boton1pendientes").classList.add("activo");
            document.getElementById("sin_contenido_desplegado").style.display = "none";
            document.getElementById("bandeja_vacia").style.display = "none";
        }
    }
}
//---------------------------------------------------------------------------------

activarBotonDesdeInicioPas();
