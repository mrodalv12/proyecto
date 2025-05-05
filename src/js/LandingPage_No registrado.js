 
  function enviarFormulario(event) {
    event.preventDefault();
    const correo = document.getElementById("correo").value;
    const asunto = document.getElementById("asunto").value;
    const mensaje = document.getElementById("mensaje").value;
  
    if (correo && asunto && mensaje) {
      alert("¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.");
      document.querySelector("form").reset();
    } else {
      alert("Por favor, completa todos los campos.");
    }
  
    return false;
  }

  /*window.addEventListener('load', function() {
    const logueado = localStorage.getItem('logueado');
  
    if (logueado === 'true') {
      // Si está logueado pero está en la página pública, lo redirijo a la privada
      if (window.location.pathname.includes('landing.html')) {
        window.location.href = 'landing2.html';
      }
    } else {
      // Si NO está logueado pero está intentando entrar a la página privada
      if (window.location.pathname.includes('landing2.html')) {
        window.location.href = 'landing.html';
      }
    }
  });*/