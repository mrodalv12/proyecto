// Función para mostrar/ocultar el menú hamburguesa
function toggleMenu() {
    const menu = document.querySelector('.links_del_header');
    menu.classList.toggle('active');
}

// Agregar el evento al botón hamburguesa
document.getElementById('menu-hamburguesa').addEventListener('click', toggleMenu);