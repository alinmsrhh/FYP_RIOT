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
        <li><a href="index.php#about">About</a></li>
        <li><a href="index.php#services" class="active">Journals</a></li>
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
              <a href="journal2.php">Web-Based Medical Information System for Stroke RIOT Patients: A Prototype</a>
              <a href="service-details.php" class="active">Design and Implementation of a Deep Learning Based Hand Gesture Recognition System for RIOT Environments using MediaPipe</a>
            </div>

            <h4>Purpose of the Project</h4>
            <p>To create a supportive, remote rehabilitation system tailored for stroke patients, especially those who need help recovering hand movement abilities. Stroke recovery often requires frequent and regular hand exercises, which can be difficult to maintain due to factors like limited access to physical therapy or lack of motivation. Our online rehabilitation tool offers a convenient solution, allowing patients to perform therapeutic exercises from home, with guidance and monitoring from their healthcare providers.</p>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="assets\img\journalpic.jpeg" alt="" class="img-fluid services-img">
            <h3>Design and Implementation of a Deep Learning Based Hand Gesture Recognition System for Rehabilitation Internet-Of-Things (RIOT) Environments using MediaPipe</h3>
            <p>
              The rehabilitation system uses a camera to detect and track hand gestures in real time as patients perform exercises. The system relies on advanced technologies like MediaPipe and Internet of Things (IoT) to accurately recognize and interpret hand movements. By leveraging these tools, the system can identify specific hand gestures, ensuring patients perform the exercises correctly. Each movement is captured and analyzed, providing immediate feedback to patients on whether they’re executing the gestures as intended. This real-time correction helps patients stay engaged and ensures they follow the correct movements to maximize recovery benefits.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Help stroke patients build confidence</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Maintain motivation</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Enhance the effectiveness of their recovery process</span></li>
            </ul>
            <p>
             Our system has undergone rigorous testing in simulated environments to ensure that it operates accurately in real-life conditions. 
            </p>
            <p>
              Factors such as lighting, camera distance, and hand positioning can impact gesture recognition, so extensive adjustments and calibrations have been made to optimize accuracy and consistency. By testing under various conditions, we ensure that patients receive reliable feedback and that the system performs well across different settings, making it a robust tool for home-based rehabilitation.
            </p>

            <div class="btn-box">
          <a href="calibrating.php" class="btn-primary">
            Read More
          </a>
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