<?php
session_start();
$is_logged_in = isset($_SESSION['username']); // Check if the user is logged in
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>RIOT</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

   <!-- <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div> End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">RIOT</h1>
          <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php#about">About</a></li>
        <li><a href="index.php#services">Journals</a></li>
        <li><a href="index.php#team">Team</a></li>
        <li><a href="index.php#contact">Contact</a></li>
        <li><a href="copyright.php">Copyright</a></li>

        <?php if ($is_logged_in): ?>
            <!-- Navigation for Logged-in Users -->
            <li class="dropdown">
                <a href="#"><span>RIOT Dashboard</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                    <li><a href="https://beejok.com/riot/">RIOT Phase 1</a></li>
                    <li><a href="https://riot.iium.iolayerz.com/index.php">RIOT Phase 2</a></li>
                </ul>
            </li>
            <li><a href="template.php">Consent Form</a></li>
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <!-- Navigation for Non-Logged-in Users -->
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

      </div>

    </div>

  </header>

  <main>
    <section id="copyright-section" style="padding: 100px 15px; background-color: #f9f9f9;">
      <div class="row">
        <div class="col-md-6 col-sm-12 d-flex justify-content-center mb-4">
          <img 
            src="assets/img/copyright/copyright2.jpeg" 
            alt="Copyright Image 1" 
            class="img-fluid" 
            style="
              border: 2px solid #ddd; 
              border-radius: 10px; 
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
              max-width: 90%; 
              transition: transform 0.3s ease-in-out;"
            onmouseover="this.style.transform='scale(1.06)'" 
            onmouseout="this.style.transform='scale(1)'">
        </div>
        <div class="col-md-6 col-sm-12 d-flex justify-content-center mb-4">
          <img 
            src="assets/img/copyright/copyright1.jpeg" 
            alt="Copyright Image 2" 
            class="img-fluid" 
            style="
              border: 2px solid #ddd; 
              border-radius: 10px; 
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
              max-width: 90%; 
              transition: transform 0.3s ease-in-out;"
            onmouseover="this.style.transform='scale(1.06)'" 
            onmouseout="this.style.transform='scale(1)'">
        </div>
      </div>
    </section>
  </main>
   

  <footer id="footer" class="footer accent-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.php" class="logo d-flex align-items-center">
            <span class="sitename">RIOT</span>
          </a>

          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.php#hero">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="index.php#services">Journals</a></li>
            <li><a href="index.php#team">Team</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-check-circle-fill"></i> <span>Hand Grip</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>Finger Opposition</span></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Excellence of Cyber Security,</p>
          <p>International Islamic University Malaysia,</p>
          <p>Jln Gombak, 53100</p>
          <p>Kuala Lumpur, Malaysia.</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+03-64215646</span></p>
          <p><strong>Email:</strong> <span>anwarzain@iium.edu.my</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">RIOT</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
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
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>