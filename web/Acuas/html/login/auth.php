<?php
// auth.php

// Database credentials
$servername = "localhost"; // Adjust as necessary
$username = "developer";        // Adjust as necessary
$password = "Fukeit@123";            // Adjust as necessary
$dbname = "acuas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$user = $_POST['username'];
$pass = $_POST['password'];

// Prepare and bind
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $user, $pass);

// Execute and fetch result
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Redirect based on username
    switch ($row['username']) {
        case 'pratyux':
            header("Location: /pratxx-9da8191b9c");
            break;
        case 'rghx':
            header("Location: /rghxx-7da8191b9c");
            break;
        case 'savyx':
            header("Location: /savyxx-6da8191b9c");
            break;
        default:
            echo "Unknown user!";
            break;
    }
} else {
    echo "Invalid username or password!";
}

$stmt->close();
$conn->close();
?>
