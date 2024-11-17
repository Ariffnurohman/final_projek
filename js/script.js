// Toggle class active
const navbarNav = document.querySelector(".navbar-nav");
// Ketika hamburger menu di klik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// Klik di luar sidebar untuk menghilangkan nav
const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

// Gambar animasi

document.addEventListener('DOMContentLoaded', function() {
  const aboutImg = document.querySelector('.about .row .about-img');

  function checkVisibility() {
      const rect = aboutImg.getBoundingClientRect();
      const windowHeight = (window.innerHeight || document.documentElement.clientHeight);

      // Cek apakah gambar berada dalam viewport
      if (rect.top <= windowHeight && rect.bottom >= 0) {
          aboutImg.classList.add('visible');
          window.removeEventListener('scroll', checkVisibility); // Hapus event listener setelah animasi diaktifkan
      }
  }

  // Cek visibilitas saat halaman dimuat
  checkVisibility();
  
  // Cek visibilitas saat menggulir
  window.addEventListener('scroll', checkVisibility);
});