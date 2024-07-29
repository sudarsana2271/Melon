<?php
// Ensure error reporting is enabled
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected<br>";

// Get user inputs
$Name = $_POST['username'] ?? '';
$Pass = $_POST['password'] ?? '';

if (empty($Name) || empty($Pass)) {
    die("Username and password are required");
}

// Prepare and bind
$stmt = $conn->prepare("SELECT Password FROM signup WHERE Name = ?");
$stmt->bind_param("s", $Name);

// Execute statement
$stmt->execute();

// Bind result variables
$stmt->bind_result($db_password);

// Fetch value
if ($stmt->fetch()) {
    // Debug output for retrieved password
    // echo "Retrieved password: " . htmlspecialchars($db_password) . "<br>";

    // Directly compare plaintext passwords
    if ($Pass === $db_password) {
        // echo "Login successfully <a href='index.php'>Home</a>";
        header('Location:index.php');
    } else {
        echo "<h1>Error in credentials Pass</h1>";
    }
} else {
    echo "<h1>Error in credentialsID</h1>";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>