<?php
// Start the session
session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
      
<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
</head>
    <style>
      body {
        font-family: Arial, sans-serif;
        /* background-color: #f8f9fa; */
      }
    
      .container {
        max-width: 900px;
        margin: auto;
        /* padding: 20px; */
        /* background-color: #fff; */
        border-radius: 8px;
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
      }
    
      h1, h2 {
        margin-top: 0;
      }
    
      .job-details {
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      }
    
      .job-details h1, .job-details h2 {
        color: #007bff;
      }
    
      .job-description {
        margin-top: 20px;
      }
    
      .company-info {
        margin-top: 20px;
      }
    
      .company-info p {
        margin: 5px 0;
      }
    
      .footer {
        /* margin-top: 20px; */
        text-align: center;
        color: #6c757d;
      }
      .navbar{
    background-color:black !important;
  }
    </style>
  </head>
  <body>

  <?php
// Check if user is logged in

?>
<!-- 
<div class="container mx-auto mb-3 mt-3 ">
  <div class="row ">
    <div class="col-md-9 bg-info">
      <div class="row">
        <div class="col-md-9 bg-primary" ><h1 id="jobTitle">job tile</h1>
        <div class="row"><div class="col-md-2">  <p id="jobDeadline">Application Deadline</p></div> <div class="col-md-2">  <p id="TimeDuration"></p></div><div class="col-md-2">  <p id="WorkSchedule"></p></div></div>
        </div>
        <div class="col-md-3 bg-light"><h2 id="salary">job salary</h2></div>
      </div>
      <div class="row">
        <div class="col bg-warning m-4"><div id="jobDescription">job discription</div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, iure autem recusandae voluptate distinctio deleniti, amet alias quasi itaque modi excepturi. Unde expedita ad voluptatem quisquam ea explicabo voluptas, odio incidunt vitae asperiores hic temporibus facere velit eveniet consectetur aliquid, optio repudiandae? Temporibus dicta sequi iste ratione ducimus? Repudiandae eum dolorum quo nostrum doloremque ea voluptatibus nisi aliquid debitis minima, inventore necessitatibus sit vel minus! Est rerum optio doloribus voluptatum porro, aut accusantium voluptatibus ab quo rem ex quasi hic a earum provident perspiciatis odit, tempore pariatur nihil. Voluptas, ea. Repudiandae harum dolor iusto, fuga natus ab adipisci iure aliquid. Ad inventore cum voluptatum, a nihil voluptatibus deserunt sequi quibusdam tenetur amet? Adipisci itaque quidem vel iusto ipsum doloribus vero repudiandae voluptatibus, magni quo corporis repellendus quas ratione quia unde aliquid earum eveniet ut soluta suscipit recusandae totam iure facilis quisquam. Exercitationem ab quas ducimus provident non, sequi inventore ipsa cumque ratione necessitatibus, quaerat consequuntur numquam accusantium ad repellendus error maxime repellat. Laudantium dignissimos, cumque doloribus libero, officiis perferendis eligendi animi ratione at iure, perspiciatis illo a magnam nihil obcaecati illum quas possimus consequatur omnis minus culpa qui itaque enim maxime? Fugit expedita labore reprehenderit nulla qui eum, ad accusantium. Doloremque voluptatibus excepturi nisi nihil vero? Eos ratione debitis ea delectus adipisci eligendi ab? Recusandae voluptate officiis fugit quas explicabo dolores illo unde, magnam impedit itaque deleniti ea quis incidunt necessitatibus, at sunt optio, quae distinctio dolorum! Veritatis iure tempore odit laboriosam dolor sunt reprehenderit natus, quia minus amet adipisci unde illum, error nobis tempora eum corporis totam ex nulla eos explicabo impedit ullam tenetur quis! Vitae reprehenderit suscipit nam molestias? Quibusdam sint dicta repellat totam in illo distinctio facere et non id dolorum nam impedit optio, deleniti ducimus error iusto temporibus, animi, molestias ratione! Aliquid laudantium error sint eum.</p>
         <div>Type of Employer
          <p  id="EmploymentType"></p>
         </div>
         <div>Employer Education Required
          <p id="EducationRequirements"></p>
         </div>
         <div>Employer Experience Required
          <p id="ExperienceRequirements" ></p>
         </div>
        <div class="">posting of skills
          <p id="SkillsRequired"></p>
        </div></div>
      </div>
      <div class="row">
        <div class="col m-4 bg-warning " >
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed velit, nostrum inventore aliquid corporis quas commodi totam? Maiores sit corrupti pariatur iure saepe tempore, sapiente quasi ullam at sequi cumque.</div>
       </div>
      <div class="row ">
        <div class="col m-4 bg-primary " >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed velit, nostrum inventore aliquid corporis quas commodi totam? Maiores sit corrupti pariatur iure saepe tempore, sapiente quasi ullam at sequi cumque.</div>
       </div>
    </div>
    <div class="col-md-3 bg-danger">
      <h2>About the Client</h2>
      <div id="companyName" > </div>
      <div  id="location"></div>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Est adipisci nobis nihil, aperiam doloremque odio recusandae. Nisi repudiandae quo eum neque magnam maxime quaerat necessitatibus sint voluptate iste. Hic, magnam. Magnam at facilis, suscipit sequi rerum beatae numquam laudantium, in omnis placeat, minus laborum. Quidem asperiores nesciunt dolor omnis necessitatibus modi ducimus repellendus quae facere consequuntur non, voluptate, quis aliquam dolorem velit! Ipsum explicabo obcaecati commodi id eveniet quis porro rem labore magnam praesentium ea voluptatem consectetur neque magni sit, incidunt nulla totam. Iste repellendus facilis nulla, hic impedit, ullam eveniet voluptas eligendi incidunt corporis voluptatem expedita ad non a?
</div>

  </div>
  
</div> -->




<!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/starter-template/"> -->

<?php include 'navbar.php'; ?>

<div class="container p-4 mt-4 mb-2" style=" box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
<div class="job-details">
  <h1 id="jobTitle">Job Title</h1>
  <div class="row">
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-4"> 
         <b>Application Deadline:</b>
          <p id="jobDeadline">Application Deadline</p>
        </div>
        <div class="col-md-4">
          <b>Time Duratio:</b>
          <p id="TimeDuration">Time Duration</p>
        </div>
        <div class="col-md-4">
          <b>Work Schedule:</b>
          <p id="WorkSchedule">Work Schedule</p>
        </div>
      </div>
    </div>
    <div class="col-md-3" style="display: flex;">
    <h2 class="text-success">$</h2> <h2 id="salary">h</h2>
    </div>
  </div>
  <div class="job-description">
    <h2>Job Description</h2>
    <p id="jobDescription">Job Description Here</p>
    <div> <b> Type of Employer:</b> <p id="EmploymentType"></p></div>
    <div> <b>Employer Education Required: </b><p id="EducationRequirements"></p></div>
    <div> <b>Employer Experience Required:</b> <p id="ExperienceRequirements"></p></div>
    <div> <b>Posting of Skills:</b> <p id="SkillsRequired"></p></div>
  </div>
</div>
<div class="company-info">
  <h2>About the Client</h2>
  <div id="companyName">Company Name</div>
  <div id="location">Location</div>
  <b>About Client And There Company</b>
  <p id="AboutCompany">Company Description</p>
</div>

<div class="text-center mb-4 text-primary">  <h1>Apply For This Job</h1> <p class="text-end"><h5> <span class="badge bg-secondary" id="applicantCount"></span></h5></div>
<div class="container p-3"  style=" box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

  <form action="application.php" method="POST" enctype="multipart/form-data">
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1"></span>
     <input type="text" class="form-control "name="jt" placeholder="Mention the Job Title You are going to apply for" aria-label="Username" aria-describedby="basic-addon1">
   
    </div>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">@</span>
     <input type="text" class="form-control "name="username" placeholder="Applicant Username" aria-label="Username" aria-describedby="basic-addon1">
     <input type="text" class="form-control" placeholder="Applicant's username" name="email" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <span class="input-group-text" id="basic-addon2" >@example.com</span>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1"></span>
     <input type="text" class="form-control" name="userExperiance" placeholder="Applicant Past Experiance" aria-label="Username" aria-describedby="basic-addon1">
     <input type="text" class="form-control" placeholder="Applicant's Qualification" name="Qualifiction" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <span class="input-group-text" id="basic-addon2" ></span>
    </div>
    
 
    
    <div class="mb-3">
      <label for="basic-url" class="form-label">Your vanity URL</label>
      <div class="input-group">
        <span class="input-group-text" id="basic-addon3">Your Resume</span>
        <input type="file" class="form-control" id="basic-url" name="resume" aria-describedby="basic-addon3 basic-addon4">
      </div>
      <div class="form-text" id="basic-addon4">Please Enter Your resume here.</div>
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text">$</span>
      <input type="text" class="form-control" name="Amount" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-text">.00</span>
    </div>
    
    <div class="input-group mb-3">
      <input type="Number" class="form-control" placeholder=" Application Contact Number" aria-label="Username" name="Contact">
      <span class="input-group-text">@</span>
      <input type="text" class="form-control" placeholder="Country" aria-label="Server" name="country">
    </div>
    
    <div class="input-group">
      <span class="input-group-text">Write your job proposal here!</span>
      <textarea class="form-control" aria-label="With textarea" name="proposal"></textarea>
    </div>
    <div class="d-grid gap-2 mt-5">
      <button class="btn btn-primary" type="submit">Apply Now</button>
   
    </div>
  </form>
</div>
<div class="footer">
  Created by the WorkWave team &middot; &copy; 2021
</div>
</div>
<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- JavaScript code will go here -->
    <script>
      // Function to get URL parameters
      function getUrlParameter(name) {
          name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
          var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
          var results = regex.exec(location.search);
          return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
      };

      // Fetch job details from PHP script using the id from URL parameter
      var jobId = getUrlParameter('id');
      fetch('getJobDetails.php?id=' + jobId)
          .then(response => response.json())
          .then(data => {
              // Update HTML elements with job details
              document.getElementById('jobTitle').innerText = data[0].jbTitle;
              document.getElementById('jobDescription').innerText = data[0].jbDescription;
              document.getElementById('jobDeadline').innerText = data[0].AppDeadline;
              document.getElementById('companyName').innerText = data[0].Cname;
              document.getElementById('location').innerText = data[0].location;
              document.getElementById('AboutCompany').innerText = data[0].AbCompany;
              document.getElementById('EmploymentType').innerText = data[0].EmpType;
              document.getElementById('EducationRequirements').innerText = data[0].EduReq;
              document.getElementById('ExperienceRequirements').innerText = data[0].ExpReq;
              document.getElementById('SkillsRequired').innerText = data[0].SkillReq;
              document.getElementById('TimeDuration').innerText = data[0].TimeDur;
              document.getElementById('WorkSchedule').innerText = data[0].WorkSche;
              document.getElementById('salary').innerText = data[0].salary;
              // Update other HTML elements with respective job details
          })
          .catch(error => console.error('Error fetching job details:', error));

              // Fetch applicant count from the server
        $(document).ready(function(){
            $.ajax({
                url: 'count.php', // Change this to the URL of your PHP file to get the applicant count
                type: 'GET',
                success: function(response){
                    // Update the HTML element with the applicant count
                    $('#applicantCount').text(response + " People have applied for this job");
                }
            });
        });

  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  </body>
</html>