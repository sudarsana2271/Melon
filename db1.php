<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Database connection error: " . mysqli_connect_error());
} else {
    echo "Connected<br>";

    $Name = mysqli_real_escape_string($conn, $_POST['username']);
    $Email = mysqli_real_escape_string($conn, $_POST['email']);
    $Pass = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if email already exists
    $sql = "SELECT * FROM signup WHERE Email = '$Email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) === 0) {
        // Insert new record
        $sql1 = "INSERT INTO signup (name, Email, password) VALUES ('$Name', '$Email', '$Pass')";
        $result1 = mysqli_query($conn, $sql1);

        if ($result1) {
            // echo "Record inserted<br><a href='index.php'>Home</a>";
            header('Location:index.php');// alows to redirect directly
        } else {
            echo "Record insertion failed: " . mysqli_error($conn);
        }
    } else {
        echo "Email already exists or error: " . mysqli_error($conn);
    }
}
?>