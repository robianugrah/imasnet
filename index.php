<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kedai Sahabat Ngopi</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- my style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo"><span>Imasnet</span></a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
      </div>

      <div class="navbar-extra">
        
        <a href="#" id="call-button"><i data-feather="call-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>

      <!-- search form start -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="search here..." />
        <label for="search-box"><i data-feather="search"></i></label>
      </div>
      <!-- search form end -->
    </nav>
    <!-- navbar end -->

    <!-- hero section start -->
    <section class="hero" id="home">
      <main class="content">
        <h1> Apakah Ada Bisa Kami Bantu? <span></span></h1>
        <p>
          Silahkan login terlebih dulu untuk memulai pengaduan 
        </p>
        <a href="login.php" class="cta"> Login Sekarang </a>
      </main>
    </section>
    <!-- hero section end -->

    <!-- about section start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>
      <div class="row">
        <div class="about-img">
          <img src="img/gt.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa memilih kami?</h3>
          <p>
            IMASNET adalah sebuah perusahaan penyedia layanan internet berbasis jaringan wireless (nirkabel) dan fiber optic yang beroperasi di wilayah Kecamatan Darmaraja, Kabupaten Sumedang, Jawa Barat. Perusahaan ini fokus pada penyediaan konektivitas internet untuk pelanggan rumah tangga, UMKM, hingga institusi publik. Dalam upayanya meningkatkan kualitas layanan, IMASNET terus berinovasi, salah satunya dengan menyediakan saluran pengaduan digital berbasis web untuk menjawab keluhan pelanggan secara cepat dan terstruktur. Imasnet merupakan mitra penyedia layanan internet lokal dari PT. Global Sarana Elektronika yang fokus memberikan akses internet cepat dan stabil, khususnya untuk desa dan wilayah pelosok desa, seiring dengan maraknya layanan internet dengan harga terjangkau di kabupaten sumedang imasnet hadir menjadi solusi internet. 
          </p>
          <p>
            
          </p>
        </div>
      </div>
    </section>
    <!-- about section end -->


    <!-- menu section start -->
    <section id="menu" class="menu">
      <h2><span>Menu</span> Kami</h2>
      <p>
        Menyediakan berbagai perbaikan sebagai berikut.
      </p>
      <div class="row">
        <div class="menu-card">
          <img src="img/menu.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">- Gangguan jaringan -</h3>
        
        </div>
        <div class="menu-card">
          <img src="img/menu.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">- Lemot jaringan -</h3>
          
        </div>
        <div class="menu-card">
          <img src="img/menu.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">- Kabel rusak-</h3>
         
        </div>
        <div class="menu-card">
          <img src="img/menu.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">- Sinyal hilang -</h3>
          
        </div>
        <div class="menu-card">
          <img src="img/menu.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">- Router mati -</h3>
          
        </div>
      </div>
    </section>
    <!-- menu section end -->


    <!-- footer start -->
    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kita</a>
        <a href="#menu">Menu</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">massbii</a>. | &copy; 2025</p>
      </div>
    </footer>
    <!-- footer end -->

    <!-- Feather Iconts -->
    <script>
      feather.replace();
    </script>

    <!-- my javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
