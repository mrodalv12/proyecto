window.addEventListener("DOMContentLoaded", () => {
    fetch('footer.html')
      .then(res => res.text())
      .then(html => {
        const temp = document.createElement('div');
        temp.innerHTML = html;
  
        const footer = temp.querySelector('#footer');
  
        if (footer) {
          document.getElementById('footer-placeholder').innerHTML = footer.innerHTML;
        }
      })
      .catch(err => console.error('Error cargando header/footer:', err));
  });