<?php
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
//$DATABASE_USER = 'ckapakpf_one';
$DATABASE_PASS = '';
//$DATABASE_PASS = 'oneriot_24';
$DATABASE_NAME = 'phplogin';
//$DATABASE_NAME = 'ckapakpf_loginriot';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>

<html>
<head>
	
</head>

<body>
<?php
	// PHP code (your_php_script.php)
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["variableName"])) {
		$receivedVariable = $_POST["variableName"];
		// Process the received variable here
		echo "Received variable: " . $receivedVariable;
	} else {
		echo "No data received";
	}
		
	// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
	if ($stmt = $con->prepare('INSERT INTO data(val) VALUES (?)')) {
		// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
		$stmt->bind_param('s', $receivedVariable);
		$stmt->execute();
		// Store the result so we can check if the account exists in the database.
		$stmt->store_result();
	}		
?>	
<body>
</html>