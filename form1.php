
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Job Posting Form</title>
<link rel="stylesheet" href="./css/form.css">
</head>
<body>
    <div class="form-container">
        <form id="jobForm" class="job-form" method="post" action="form.php">
            <!-- Step 1: Job Details -->
            <div class="step" id="step1">
                <h2>Step 1: Job Details</h2>
                <label for="jobTitle">Job Title:</label>
                <input type="text" id="jobTitle" name="jobTitle" required><br>
                <label for="jobDescription">Job Description:</label>
                <textarea id="jobDescription" required name="jobDescription"></textarea><br>
                <button type="button" onclick="nextStep(1)">Next</button>
            </div>
            <!-- Step 2: Company Details -->
            <div class="step" id="step2">
                <h2>Step 2: Company Details</h2>
                <label for="companyName">Company Name:</label>
                <input type="text" id="companyName" name="companyName" required><br>
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required><br>
                <label for="location">About Your Company:</label>
                <input type="text" id="About Company" name="AboutCompany" required><br>
                <button type="button" onclick="prevStep(1)">Previous</button>
                <button type="button" onclick="nextStep(2)">Next</button>
            </div>
            <!-- Step 2: Company Details -->
            <div class="step" id="step3">
                <h2>Step 3: Employ Details</h2>
                <label for="companyName">Employment Type::</label>
                <input type="text" id="companyName" name="employmentType" required><br>
                <label for="location">Education Requirements:</label>
                <input type="text" id="location" name="educationRequirements" required><br>
                <label for="location">Experience Requirements:</label>
                <input type="text" id="location" name="experienceRequirements" required><br>
                <label for="location">Skills Required:</label>
                <input type="text" id="location" name="skillsRequired" required><br>
                <button type="button" onclick="prevStep(2)">Previous</button>
                <button type="button" onclick="nextStep(3)">Next</button>
            </div>
            <!-- Step 2: Company Details -->
            <div class="step" id="step4">
                <h2>Step 4: Duration Details</h2>
                <label for="companyName">Application Deadline:</label>
                <input type="text" id="companyName"  name="applicationDeadline" required><br>
                <label for="location">Time Duration:</label>
                <input type="text" id="location" name="timeDuration" required><br>
                <label for="location">Work Schedule::</label>
                <input type="text" id="location" name="workSchedule" required><br>
                <button type="button" onclick="prevStep(3)">Previous</button>
                <button type="button" onclick="nextStep(4)">Next</button>
            </div>
            <!-- Step 3: Additional Information -->
            <div class="step" id="step5">
                <h2>Step 5: Salary </h2>
                <label for="salary">Salary :</label>
                <input type="text" id="salary" name="salary"><br>
                <button type="button" onclick="prevStep(4)">Previous</button>
                <button href="browsjob.php" type="button" onclick="submitForm()" >Submit</button>
            </div>
            <!-- Progress Bar -->
            <div class="progress-container">
                <div class="progress-bar" id="progressBar"></div>
            </div>
        </form>
    </div>
  <script src="form.js"></script>
</body>
</html>
