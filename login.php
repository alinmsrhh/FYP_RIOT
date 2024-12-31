<?php
// Include the database connection file
include("database.php");

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user data from the database
    $query = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $query->bind_param("s", $username);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: index.php"); // Redirect to a dashboard or home page
            exit;
        } else {
            $error_message = "Invalid username or password.";
        }
    } else {
        $error_message = "Invalid username or password.";
    }
}

//user logged in or not
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
   <style>
    /* Notification Styles */
    .Message {
      display: table;
      position: relative;
      margin: 40px auto 0;
      width: 500px;
      background-color: #0074D9; /* Blue color */
      color: #fff;
      transition: all 0.2s ease;
    }

    .Message.is-hidden {
      opacity: 0;
      height: 0;
      font-size: 0;
      padding: 0;
      margin: 0 auto;
      display: block;
    }

    .Message-icon {
      display: table-cell;
      vertical-align: middle;
      width: 60px;
      padding: 30px;
      text-align: center;
      background-color: rgba(0, 0, 0, 0.25);
    }

    .Message-body {
      display: table-cell;
      vertical-align: middle;
      padding: 30px 20px 30px 10px;
    }

    .Message-body p {
      margin-top: 6px;
    }
  </style>
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
          <h1 class="sitename">RIOT</h1>
          <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Journals</a></li>
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

  <body>

  <!-- Notification 
<div class="Message" id="js-timer">
  <div class="Message-icon">
    <i class="fa fa-bell-o"></i>
  </div>
  <div class="Message-body">
    <p>This is a simple, but friendly, notification.</p>
    <p class="u-italic">It will disappear within a few seconds.</p>
  </div>
</div> -->

  <div class="login-container light-background">
    <div class="login-card">
        <h2 class="login-title">Login</h2>
        <?php if (!empty($error_message)): ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form method="post" action="login.php" class="login-form">
            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-input" required>
            </div>
            <button type="submit" class="btn-submit">Login</button>
        </form>
    </div>
</div>

</body>
<!--
 <footer id="footer" class="footer accent-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
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
            <li><a href="index.html#hero">Home</a></li>
            <li><a href="index.html#about">About</a></li>
            <li><a href="index.html#services">Journals</a></li>
            <li><a href="index.html#team">Team</a></li>
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
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] 
      </div>
    </div>

  </footer> -->

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
