<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "jobform";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Extract job ID from URL parameter
if(isset($_GET['id'])) {
    $job_id = $_GET['id'];
    

    // SQL query to fetch job details from the 'form' table using the extracted ID
    $sql = "SELECT * FROM form WHERE id = $job_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Convert result to associative array
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        // Output data as JSON
        echo json_encode($data);
    } else {
        echo "No job details found.";
    }
} else {
    echo "Job ID not provided.";
}
// Close connection
$conn->close();

?>
