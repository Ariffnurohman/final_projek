<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sewa Disini</title>

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <!--Feather Icon-->
    <script src="https://unpkg.com/feather-icons"></script>

    <!--Style-->
    <link rel="stylesheet" href="../css/home.css"/>
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">SewaKamera<span>Karawang</span>.</a>
      
      <div class="navbar-nav">
        <a href="#">Menu Utama</a>
        <a href="#">Tentang Kami</a>
        <a href="#">Syarat Dan Ketentuan</a>
        <a href="#">For Sale/Dijual</a>
        <a href="#">Contact Service</a>
      </div>
      
      <div class="navbar-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero section start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Aman dan <span>Terpercaya</span></h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus,
          praesentium.
        </p>
        <a href="#" class="cta">Pesan Sekarang</a>
      </main>
    </section>
    <!-- Hero section end -->

   <!--Feather Icon-->
   <script>
      feather.replace();
      // Toggle class active
        const navbarNav = document.querySelector(".navbar-extra");
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

    </script>

    

    <!--My Javascript-->
    <script src="../js/script.js"></script>
  </body>
</html>
