<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Include PHPMailer library
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $jobT = $conn->real_escape_string($_POST['jt']);
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $exp = $conn->real_escape_string($_POST['userExperiance']);
    $Qualification = $conn->real_escape_string($_POST['Qualifiction']);
    $Amount = $conn->real_escape_string($_POST['Amount']);
    $contact = $conn->real_escape_string($_POST['Contact']);
    $country = $conn->real_escape_string($_POST['country']);
    $proposal = $conn->real_escape_string($_POST['proposal']);

    // File upload handling
    if (isset($_FILES["resume"]) && $_FILES["resume"]["error"] == 0) {
        $resumeName = basename($_FILES["resume"]["name"]);
        $targetFilePath = "uploads/" . $resumeName;

        if (move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFilePath)) {
            // File uploaded successfully, proceed to insert data into database
            // Prepare SQL statement to insert data into the table
            $sql = "INSERT INTO application (id,username, email, jobtitle, experiance, Qualification, Amount, resume, contact, country, proposal) 
                    VALUES ( Null,'{$username}', '{$email}', '{$jobT}', '{$exp}', '{$Qualification}', '{$Amount}', '{$resumeName}', '{$contact}', '{$country}', '{$proposal}')";

            if ($conn->query($sql) === TRUE) {
                // Sending email with PHPMailer
                $mail = new PHPMailer(true);

                // Server settings
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'mughaljaveria759@gmail.com';
                $mail->Password   = 'yocpounpiizcdnbj'; // Update with your Gmail password
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;

                // Recipients
                $mail->setFrom('mughaljaveria759@gmail.com', 'Javeria');
                $mail->addAddress('shahmeer.mughal.2002@gmail.com', 'Joe User');

                // Attachments
                $mail->addAttachment($targetFilePath, $resumeName);

                // Email content
                $mail->isHTML(true);
                $mail->Subject = 'New Job Application';
                $mail->Body    = "A new job application has been submitted. <br><br>
                                Job Title: $jobT <br>
                                Username: $username <br>
                                Email: $email <br>
                                Experience: $exp <br>
                                Qualification: $Qualification <br>
                                Amount: $ $Amount <br>
                                Contact: $contact <br>
                                Country: $country <br>
                                Proposal: $proposal";

                if ($mail->send()) {
                    echo 'Message has been sent';
                } else {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                }

                // Redirect to job details page after successful submission
                header("Location: message.html");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "No file was uploaded.";
    }
}

// Close connection
$conn->close();
?>
