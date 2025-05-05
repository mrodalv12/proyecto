document.getElementById('btnCuenta').addEventListener('click', function() {
    const menu = document.getElementById('menuCuenta');
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
  });
  
  // Opcional: cerrar el menú si se hace click fuera
  window.addEventListener('click', function(event) {
    if (!event.target.matches('#btnCuenta')) {
      const menu = document.getElementById('menuCuenta');
      if (menu.style.display === 'block') {
        menu.style.display = 'none';
      }
    }
  });