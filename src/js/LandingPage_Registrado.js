document.addEventListener("DOMContentLoaded", function () {
  const btn = document.getElementById("btnCuenta");
  const menu = document.getElementById("menuCuenta");

  btn.addEventListener("click", () => {
    const visible = menu.style.display === "block";
    menu.style.display = visible ? "none" : "block";
  });

  // Ocultar el menú si haces clic fuera de él
  document.addEventListener("click", function (e) {
    if (!btn.contains(e.target) && !menu.contains(e.target)) {
      menu.style.display = "none";
    }
  });
});