<?php
// Include the database connection file
include("database.php");

// Initialize an empty response
$response = [
    "success" => false,
    "message" => "Failed to submit your message."
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the submitted form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate form inputs
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        // Prepare the SQL query to insert the data
        $query = $conn->prepare("INSERT INTO contact_submissions (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $query->bind_param("ssss", $name, $email, $subject, $message);

        // Execute the query
        if ($query->execute()) {
            $response["success"] = true;
            $response["message"] = "Your message has been successfully submitted!";
        } else {
            $response["message"] = "Error: " . $query->error;
        }
        $query->close();
    } else {
        $response["message"] = "Please fill in all the fields.";
    }
}

// Close the database connection
$conn->close();

// Display the response as JSON (useful for AJAX forms)
echo json_encode($response);
?>
