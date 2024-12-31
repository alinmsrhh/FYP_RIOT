<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
if(isset($_SESSION['incorrect']))
{
	echo '<script>alert("Incorrect username/password")</script>';
	session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIOT</title>
    <!-- Showing Logo Icon -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

</head>
<body>

    <!-- Top Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-themelight fixed-top">
        <div class="container-fluid">
            <img src="img/logo.png" width="40" alt="riot logo">
            <a class="navbar-brand ms-3 navfont" href="#">RIOT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-home" aria-hidden="true"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active navfont" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navfont" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navfont" href="#features">Features</a>
                    </li>
					
					<?php
					if(isset($_SESSION['loggedin']))
					{
					echo "<li class='nav-item dropdown'>";
                    echo "<a class='nav-link dropdown-toggle navfont' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>Rehab Exercise</a>";
                    echo "<ul class='dropdown-menu dropdown-menu-end' aria-labelledby='navbarDropdown'>";
                    echo "<li><a class='dropdown-item navfont' href='rehab1.php'>Hand Strengthening</a></li>";
                    echo "<li><a class='dropdown-item navfont' href='rehab2.php'>Hand Opposition</a></li>";
                    echo "</ul>";
                    echo "</li>";
					}
					?>
					
					<?php
					if(isset($_SESSION['loggedin']))
					{
						if(htmlspecialchars($_SESSION['name'], ENT_QUOTES) == 'admin')
						{
							echo "<li class='nav-item'>";
							echo "<a class='nav-link navfont' href='dashboard/report.php'>Report</a>";  
							echo "</li>";
						}
					}
					?>

                    <li class="nav-item">
					<?php
					if(isset($_SESSION['loggedin']))
					{
						echo "<a class='nav-link navfont' href='logout.php'>[".htmlspecialchars($_SESSION['name'], ENT_QUOTES)."]Logout</a>";
					}
					else
					{
						echo '<button type="button" class="nav-link btn btn-link navfont" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>';;
					}
					?>
                    </li>
                </ul>
            </div>            
        </div>
    </nav>


    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Log In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
					<form action="authenticate.php" method="post" id="loginForm">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="username" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
						<!-- <input type="submit" value="Login" class="btn btn-primary> -->
                        <button type="submit" class="btn btn-primary">Log In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="js/login.js"></script> -->


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <div class="text-white mb-3 animated slideInRight">RIOT</div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Revolutionizing hand therapy with cutting-edge technology</h1>
                    <p class="text-white mb-4 animated slideInRight">RIOT innovates hand therapy with advanced technology, enhancing treatment precision and patient outcomes through cutting-edge solutions in diagnostics, rehabilitation, and monitoring.</p>
                    <a href="#about" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">Read More</a>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/hero-img.png" alt="Hand Photo">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid rounded-3" src="img/about-img.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-primary mb-3">About RIOT</div>
                    <h1 class="mb-4">Advanced Solutions for Hand Rehabilitation</h1>
                    <p class="mb-4">We are dedicated to transforming the field of hand therapy through the integration of advanced technology. Our mission is to enhance treatment precision and improve patient outcomes by offering innovative solutions in diagnostics, rehabilitation, and monitoring.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Detect Close Hand</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Detect Open Hand</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Track Progress</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Guided Video Exercises</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="#features">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid bg-light mt-5 py-5" id="features">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-primary mb-3">RIOT features</div>
                    <h1 class="mb-4">RIOT for AI Hand Therapy Technology</h1>
                    <p class="mb-4">RIOT features consist of advanced technologies tailored to revolutionize hand therapy, offering comprehensive diagnostics, rehabilitation, and monitoring capabilities.</p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon">
                                            <img class="img-fluid thisImgServices" src="img/services01.png" alt="AI">
                                        </div>
                                        <h5 class="mb-3">Detect Close Hand</h5>
                                        <p>RIOT accurately identifies when the hand is closed, providing crucial insights for targeted therapy sessions aimed at enhancing hand mobility and strength.</p>

                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon">
                                            <img class="img-fluid thisImgServices" src="img/services02.png" alt="IoT Barrier Entry">
                                        </div>
                                        <h5 class="mb-3">Detect Open Hand</h5>
                                        <p>Using cutting-edge AI algorithms, RIOT precisely detects hand openness, facilitating accurate assessments and personalized therapy plans based on hand posture.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <img class="img-fluid thisImgServices" src="img/services03.png" alt="Blockchain Integration">
                                        </div>
                                        <h5 class="mb-3">Track Progress</h5>
                                        <p>RIOT monitors and analyzes hand movements over time, empowering healthcare professionals to track patient progress and adjust therapy strategies based on measurable data.</p>

                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <img class="img-fluid thisImgServices" src="img/services04.png" alt="Digital Avatar Integration">
                                        </div>
                                        <h5 class="mb-3">Guided Video Exercises</h5>
                                        <p>RIOT offers instructional video exercises designed to assist patients in performing therapeutic activities correctly, supporting ongoing rehabilitation efforts with clear guidance and demonstrations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Demo Start -->
    <div class="container-fluid bg-primary feature pt-5 pb-5" id="demo">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-white mb-3">Try it Out!</div>
                    <h1 class="text-white mb-4">Experience Real-Time Hand Activity Detection</h1>
                    <p class="text-light mb-4">Experience firsthand how our real-time hand activity detection works. No registration required, contact us and we will provide unique login ID. Explore our technology and see it in action.</p>
                    
                    
                    
                </div>
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.5s">
                    <h6 class="text-light mb-4">What You Can Do:</h6>

                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Real-Time Detection: See how we detect hand movements instantly.</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Interactive Experience: Explore our technology without any barriers.</span>
                    </div>

                    <div class="d-flex align-items-center text-white mb-3">
                        <p class="text-light mb-4">Begin your exploration today and witness our cutting-edge technology in action.</p>
                    </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Demo End -->





    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            &copy; 2024 riot. All rights reserved.
        </div>
    </footer>

    

    
 

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>



</body>
</html>
