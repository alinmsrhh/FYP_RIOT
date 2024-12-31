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
        <a href="index.php" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">RIOT</h1>
          <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services" class="active">Journals</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#contact">Contact</a></li>
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
  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Journal Details</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Journal Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
              <a href="calibrating.php">Calibrating Hand Gesture Recognition for Stroke RIOT Using MediaPipe in Smart Healthcare</a>
              <a href="journal2.php" class="active">Web-Based Medical Information System for Stroke RIOT Patients: A Prototype</a>
              <a href="service-details.php">Design and Implementation of a Deep Learning Based Hand Gesture Recognition System for RIOT Environments using MediaPipe</a>
              
            </div>
            <h4>Purpose of the Project</h4>
            <p>This paper presents a prototype of a web-based medical information system that integrates IoT and hand gesture recognition to assist stroke patients with remote rehabilitation. The system enables patients to perform exercises at home while allowing healthcare providers to monitor their progress remotely. It describes the role of usability testing to refine the system, aiming for an effective and accessible rehabilitation tool that combines medical needs with advanced technology.</p>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="assets\img\journals\journal2_content.jpeg" alt="" class="img-fluid services-img">
            <h3>Web-Based Medical Information System for Stroke Rehabilitation Internet-of-Things (RIOT) Patients: A Prototype </h3>
            <p>
             The RIOT system uses advanced hand gesture recognition technology to assist with exercises. Powered by MediaPipe, the system detects and interprets hand movements in real-time, ensuring that patients perform exercises correctly and effectively. This technology captures specific hand gestures and provides immediate feedback, guiding patients throughout each exercise. With this feature, patients can understand if their movements are accurate, allowing them to make adjustments right away for the best results.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Help patients stay motivated</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Track their improvement, the system includes personalized progress tracking</span></li>
              <li><i class="bi bi-check-circle"></i> <span>This gesture detection is powered by MediaPipe technology, which is highly accurate and adaptable. MediaPipe allows the system to recognize various hand positions and gestures essential for rehabilitation, making it an effective and precise tool for tracking progress.

</span></li>
            </ul>
            <p>
             One unique feature of the RIOT system is its remote monitoring capability for healthcare providers. Providers can access the patient’s progress and exercise data remotely, allowing them to monitor the patient’s recovery journey without requiring an in-person appointment. Providers can also give feedback or adjust exercises as needed, ensuring that patients receive continuous care and guidance.
            </p>
            <p>
             Data privacy and security are top priorities in the RIOT system. Patient information, including health data and progress records, is stored securely and only accessible by authorized healthcare providers. This role-based access gives patients peace of mind, knowing that their data is protected according to healthcare standards.
            </p>
            <p>
              The RIOT website is accessible across various devices, including desktops, tablets, and smartphones, allowing patients to perform exercises wherever and whenever it’s convenient. Our team is committed to improving the system, with plans for future updates to add more advanced gesture recognition capabilities and a broader range of rehabilitation exercises to support different needs.
            </p>
            </P>

          <div class="btn-box">
          <a href="calibrating.php" class="btn-primary">
            Read More
          </a>
          </div> 
          
          </div>

        </div>

        </div>

      </div>
 

    </section><!-- /Service Details Section -->

  

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