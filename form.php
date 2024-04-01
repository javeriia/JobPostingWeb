<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Establish database connection
$connection = mysqli_connect("localhost", "root", "", "jobform");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize an array to store error messages
$errors = array();

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $job_title = mysqli_real_escape_string($connection, $_POST['jobTitle']);
    $job_description = mysqli_real_escape_string($connection, $_POST['jobDescription']);
    $company_name = mysqli_real_escape_string($connection, $_POST['companyName']);
    $location = mysqli_real_escape_string($connection, $_POST['location']);
    $Ab = mysqli_real_escape_string($connection, $_POST['AboutCompany']);
    $employment_type = mysqli_real_escape_string($connection, $_POST['employmentType']);
    $education_requirements = mysqli_real_escape_string($connection, $_POST['educationRequirements']);
    $experience_requirements = mysqli_real_escape_string($connection, $_POST['experienceRequirements']);
    $skills_required = mysqli_real_escape_string($connection, $_POST['skillsRequired']);
    $application_deadline = mysqli_real_escape_string($connection, $_POST['applicationDeadline']);
    $time_duration = mysqli_real_escape_string($connection, $_POST['timeDuration']);
    $work_schedule = mysqli_real_escape_string($connection, $_POST['workSchedule']);
    $salary = mysqli_real_escape_string($connection, $_POST['salary']);

    // Check if required fields are empty
    if (empty($job_title)) {
        $errors[] = "Job Title is required";
    }
    if (empty($job_description)) {
        $errors[] = "Job Description is required";
    }
    // Add validations for other fields if needed

    // If there are no errors, proceed with inserting data into the database
    if (empty($errors)) {
        // Insert data into database
        $sql = "INSERT INTO `form` (`id`, `jbTitle`, `jbDescription`, `Cname`, `location`,`AbCompany`, `EmpType`, `EduReq`, `ExpReq`, `SkillReq`, `AppDeadline`, `TimeDur`, `WorkSche`, `salary`) VALUES (NULL, '{$job_title}', '{$job_description}', '{$company_name}', '{$location}','{$Ab}', '{$employment_type}', '{$education_requirements}', '{$experience_requirements}', '{$skills_required}', '{$application_deadline}', '{$time_duration}', '{$work_schedule}', '{$salary}')";

        if (mysqli_query($connection, $sql)) {
            // Successfully inserted into the database
            // You can add any further processing logic here
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }
    } else {
        // Display error messages
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

// Close connection
mysqli_close($connection);
?>
