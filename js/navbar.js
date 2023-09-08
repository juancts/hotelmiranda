


document.addEventListener("DOMContentLoaded", function () {
    const hamburgerButton = document.getElementById("hambur");
    const navbarNav = document.getElementById("navbarNav");
    hamburgerButton.addEventListener("click", function () {
      navbarNav.style.display = (navbarNav.style.display === 'none' || navbarNav.style.display === '') ? 'block' : 'none';
    });
  });
  