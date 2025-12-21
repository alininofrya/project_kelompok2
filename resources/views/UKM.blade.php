<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Aplikasi Manajemen UKM</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
<link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
<link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Main CSS -->
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/UKM.css') }}" rel="stylesheet">
<link href="../css/main.css" rel="stylesheet">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">UKM</h1>
                <div class="nav-right">
    <span id="userPoints" class="points-box">Points: 0</span>
  </div>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/index" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="/UKM">UKM</a></li>
          <li><a href="#Logout">Logout</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

</head>

<section id="pilih-ukm" class="py-5" style="margin-top: 120px;">
  <div class="container" data-aos="fade-up">
    <div class="section-header text-center mb-5">
      <h2>Pilih UKM Kamu</h2>
      <p>Setiap UKM memiliki nilai poin tertentu. Pilih sesuai minatmu!</p>
    </div>

    <div class="container my-5">
    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-6">
            <div class="ukm-card">
                <img src="{{ asset('assets/img/services/Basket.webp') }}" alt="UKM">
                <div>
                    <h5>UKM Basket</h5>
                    <p class="ukm-desc">Wadah bagi mahasiswa yang ingin mengasah kemampuan bermain basket, meningkatkan fisik, dan mengikuti kompetisi antar kampus.</p>
                    <p>Poin: <strong>30</strong></p>
                    <button class="ukm-btn" onclick="pilihUKM('UKM Basket')">Pilih UKM</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6">
            <div class="ukm-card">
                <img src="{{ asset('assets/img/services/Voli.webp') }}" alt="UKM">
                <div>
                    <h5>UKM Voli</h5>
                    <p class="ukm-desc">Tempat latihan dan pembinaan bagi pecinta bola voli, fokus pada teamwork, teknik dasar, dan turnamen internal maupun eksternal.</p>
                    <p>Poin: <strong>25</strong></p>
                    <button class="ukm-btn" onclick="pilihUKM('UKM Voli')">Pilih UKM</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6">
            <div class="ukm-card">
                <img src="{{ asset('assets/img/services/Sepak_bola.webp') }}" alt="UKM">
                <div>
                    <h5>UKM Sepak Bola</h5>
                    <p class="ukm-desc">Komunitas sepak bola aktif yang rutin latihan, mengembangkan skill individu, serta berpartisipasi dalam pertandingan antar universitas.</p>
                    <p>Poin: <strong>35</strong></p>
                    <button class="ukm-btn" onclick="pilihUKM('UKM Sepak Bola')">Pilih UKM</button>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-6">
            <div class="ukm-card">
                <img src="{{ asset('assets/img/services/Taekwondo.webp') }}" alt="UKM">
                <div>
                    <h5>UKM Taekwondo</h5>
                    <p class="ukm-desc">UKM bela diri untuk meningkatkan disiplin, kekuatan mental, dan teknik bertarung, bimbingan oleh pelatih tersertifikasi.</p>
                    <p>Poin: <strong>28</strong></p>
                    <button class="ukm-btn" onclick="pilihUKM('UKM Taekwondo')">Pilih UKM</button>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-6">
            <div class="ukm-card">
                <img src="{{ asset('assets/img/services/Seni_tari.webp') }}" alt="UKM">
                <div>
                    <h5>UKM Seni Tari</h5>
                    <p class="ukm-desc">Tempat bagi mahasiswa yang memiliki minat di dunia tari tradisional maupun modern untuk berkarya dan tampil dalam berbagai event.</p>
                    <p>Poin: <strong>20</strong></p>
                    <button class="ukm-btn" onclick="pilihUKM('UKM Seni Tari')">Pilih UKM</button>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-6">
            <div class="ukm-card">
                <img src="{{ asset('assets/img/services/Musik.webp') }}" alt="UKM">
                <div>
                    <h5>UKM Musik</h5>
                    <p class="ukm-desc">Komunitas untuk musisi kampus yang ingin belajar, berlatih, kolaborasi, hingga tampil dalam panggung pentas musik kampus.</p>
                    <p>Poin: <strong>22</strong></p>
                    <button class="ukm-btn" onclick="pilihUKM('UKM Musik')">Pilih UKM</button>
                </div>
            </div>
        </div>

    </div>
</div>

</section>

<script>
  function pilihUKM(nama, poin) {
    document.getElementById("hasilPilihan").textContent =
      "Kamu memilih UKM " + nama + " dengan poin " + poin;
  }
</script>


            <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Axis</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

