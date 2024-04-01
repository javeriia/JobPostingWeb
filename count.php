<?php
// Database configuration
$servername = "localhost"; // Apne database server ka naam daalen
$username = "root"; // Apne database username ka naam daalen
$password = ""; // Apne database password ka naam daalen
$dbname = "jobform"; // Apne database ka naam daalen

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch applicant count from the server
$sql = "SELECT COUNT(*) AS total_applicants FROM application";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row["total_applicants"];
} else {
    echo "0";
}

// Close connection
$conn->close();
?>
