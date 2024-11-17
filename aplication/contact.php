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
    <link rel="stylesheet" href="../css/contact.css" />
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
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!--Contact Section start-->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
        modi!
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.433250760202!2d107.30080269999999!3d-6.337887299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e697755af4e9101%3A0x2cde5dceff9e6ba3!2sToko%20Kamera%20Karawang!5e0!3m2!1sid!2sid!4v1729670150637!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp" />
          </div>
          <button type="submit" class="btn">Kirim pesan</button>
        </form>
      </div>
    </section>
    <!--Contact Section End-->

    <!-- Footer start -->
    <footer>
      <div class="sosial">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>
      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>
    </footer>
    <!-- Footer end -->

    <!--Feather Icon-->
    <script>
      feather.replace();
    </script>

    <!--My Javascript-->
    <script src="../js/script.js"></script>
  </body>
</html>
