window.addEventListener("DOMContentLoaded", () => {
    fetch('header.html')
      .then(res => res.text())
      .then(html => {
        const temp = document.createElement('div');
        temp.innerHTML = html;
  
        const header = temp.querySelector('#header');
  
        if (header) {
          document.getElementById('header-placeholder').innerHTML = header.innerHTML;
        }
  
    
      })
      .catch(err => console.error('Error cargando header/footer:', err));
  });