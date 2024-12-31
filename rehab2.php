<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
if(!isset($_SESSION['loggedin']))
{
	header('Location: index.php');
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

    <!-- MP Analysis -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@mediapipe/control_utils@0.1/control_utils.css" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@mediapipe/camera_utils@0.1/camera_utils.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@mediapipe/control_utils@0.1/control_utils.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@mediapipe/drawing_utils@0.2/drawing_utils.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@mediapipe/hands@0.1/hands.js" crossorigin="anonymous"></script>

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
                        <a class="nav-link active navfont" aria-current="page" href="index.php">Home</a>
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

    <script src="js/login.js"></script>

    <!-- Rehab 1 Start -->
    <div class="container-fluid bg-primary feature pt-5 mt-5" id="about">
        <div class="container">
            <div class="row g-5 align-items-center">
                

                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-white mb-3">Hand Exercise 2</div>
                    <h1 class="mb-4 text-white ">Hand Opposition Exercise</h1>
                    <p class="mb-4 text-light ">The Hand Opposition Exercise is designed to improve fine motor skills, hand-eye coordination, and overall hand function. It targets the muscles and tendons responsible for finger and thumb movements, making it beneficial for rehabilitation and maintaining hand health.</p>
                    <p class="mb-4 text-muted"><i>Please note, the app detects and focuses on one hand per session. The first hand visible in the video will be detected initially.</i></p>

                </div>

            </div>
        </div>
    </div>
    <!-- Rehab 1 End -->


    <!-- Analysis Start -->
    <div class="container-fluid bg-light">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <h2 class="mb-4">Try It Out!</h2>
                    <ol>
                        <li>Click on the start button to begin the analysis.</li>
                        <li>Play the video and follow the therapy instructions.</li>
                        <li>Click the pause button to pause the detection.</li>
                        <li>Click the stop button to turn off the camera.</li>
                        <li>Click the reset button to reset the calculation and start fresh.</li>
                    </ol>
                    
                    
                    <video class="local_video" controls>
                        <source src="vid/Hand Opposition.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>


                    <div class="alert alert-success mt-3">
                        <h5 class="alert-heading">Analysis</h5>
                        <hr>
                        <div id="handCounts" class="hand-counts">
                            <p class="mb-0">Hand Opposition Count: <span id="openOppositionCount">0</span></p>
                            <p class="mb-0">Hand Non-opposition Count: <span id="nonOppositionCount">0</span></p>
                        </div>
                        
                    </div>
                    <div class="d-flex justify-content-center">
                        <button id="startButton" class="btn btn-start m-1 rounded-3">Start</button>
                        <button id="pauseButton" class="btn btn-pause m-1 rounded-3">Pause</button>
                        <button id="stopButton" class="btn btn-danger m-1 rounded-3">Stop</button>
                        <button id="resetButton" class="btn btn-warning m-1 rounded-3">Reset</button>
                    </div>
                    
                </div>

                <div class="col-lg-6">
                    <h2 class="mb-4">Real-time Detection</h2>

                    <p class="text-muted">Your video will appear here:</p>

                    <div class="panel-block">
                        <canvas class="output3" width="480" height="480"></canvas>
                    </div>
                    
                </div>

                             
            </div>
        </div>
    </div>
    <!-- Analysis End -->

    <div class="container-fluid">
        <!-- Hidden Webcam Video -->
        <video class="input_video3" style="display:none;"></video>
        <div class="loading">
            <div class="spinner"></div>
        </div>
        <div style="visibility: hidden;" class="control3"></div>

    </div>   

    


    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            &copy; 2024 riot. All rights reserved.
        </div>
    </footer>

    
    <!-- MP Analysis Bundle -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@mediapipe/hands@0.4.1646424910/hands.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@mediapipe/camera_utils@0.4.1646424910/camera_utils.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@mediapipe/drawing_utils@0.4.1646424910/drawing_utils.js"></script>

    <!-- Local hands analysis -->
    <script src="js/hands_opposition.js"></script>
 

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
