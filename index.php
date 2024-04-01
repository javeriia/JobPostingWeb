<?php
// Start the session
session_start();
?>

 <!doctype html>
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
 @media only screen and (max-width: 768px) {
    .banner {
      height: 200px; 
    }
  
    .overlay-cards {
      margin-top: -50px; 
    }
  
    .card {
      width: calc(100% - 0px)!important; 
    }
  } 
  
.scontainer{
  /* background-color:grey!important; */
  ;
}
  .scontainer .card {
  /* background-color:transparent!important; */
  width: 250px !important;
  height:300px !important;
  
}
.scontainer .card {
    /* Your existing styles */
    width: 250px !important;
    height: 300px !important;
    position: relative; /* Ensure proper stacking context for pseudo-elements */
    overflow: hidden; /* Hide overflow to prevent content overflow */
    transition: transform 0.3s ease; /* Add smooth transition effect */
}

.scontainer .card::before {
    content: ''; /* Create a pseudo-element to overlay on hover */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent background color */
    opacity: 0; /* Initially transparent */
    transition: opacity 0.3s ease; /* Add smooth transition effect */
}

.scontainer .card:hover::before {
    opacity: 1; /* On hover, make the background semi-transparent */
}

.scontainer .card:hover {
    transform: scale(1.05); /* On hover, scale up the card slightly */
}
.card-overlay {
  position: absolute; /* Use absolute positioning */
    top: 20px;
    left: 10px;
    color: white;
    padding: 20px; /* Add padding as needed */
    /* background-color: rgba(0, 0, 0, 0.5); Adjust opacity and color */
    width: calc(100% - 20px); /* Adjust width */
    box-sizing: border-box; /* Ensure padding is included in width */
    z-index: 2; /* Ensure the text is above the images */
   
}
.card:hover {
  opacity:1;
}
.stitle .stext{
  position: 0;
}
.slick-prev {
    background-color: white !important;
    width: 50px;
    height: 60px;
    border-radius: 100%;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1) !important;
    padding: px; /* Add padding to make the button more clickable */
    z-index: 1; /* Ensure the button is above the images */
}
.slick-next {
    background-color: white !important; /* Removed unwanted comma */
    width:50px;
    height:60px;
    border-radius:100%;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1)!important;
}

.scontainer .card {
    background-color: transparent !important;
    width: 250px !important;
    height: 300px !important;
}

.slick-prev::before {
    content: '⇜';
    font-size: 34px;
    color: #000!important; /* Changed arrow color to white */
}

.slick-next::before {
    content: '⇝';
    font-size: 34px;
    color: #000 !important; /* Changed arrow color to white */
  }
  .slick-slide{
    min-height:0px !important;
  }
  .navbar-scroll {
            background-color: black !important;
            transition: 0.3s ease;
            color:black !important;
        }
  .navbar-scroll .nav-link {
           
            color:black !important;
        }
      
.background-blue{
background-color:rgb(134, 168, 173)!important;
}
#ft{
  max-width: 1000px i !important;
}
#bt{
  /* background-color:rgb(134, 168, 173)!important; */
  /* border:2px solid white!important; */
} 
#bt:hover{
  color:black !important;
}
#ig{
    border: 10px dashed rgb(134, 168, 173) ;
  }


  </style>
<body style="background-color:white !important;">
  
        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-dark" role="status"></div>
        </div>
        <!-- Spinner End -->


<?php include 'navbar.php'; ?>

<div class="container-fluid blue-container  my-5 mt-0" style="background-color:rgb(134, 168, 173)!important;">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7 col-md-12">
                <!-- <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">Welcome to CaterServ</small> -->
                <h1 class="display-2 mb-5 mt-0 text-light animated bounceInDown">StartUp your journy with <span style="color:rgb(23, 23, 87)!important;">WORKWAVE     </span>Finds Best Jobs</h1>
<a  id='bt' href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ? 'browsjob.php' : 'login.php'; ?>" class="btn btn-primary border-0 my-5 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Brows jobs</a>
<a  id='bt'href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ? 'form1.php' : 'login.php'; ?>" class="btn btn-primary border-0 my-5 rounded-pill py-3 px-4 px-md-5 animated bounceInLeft">Post Jobs</a>
            </div>
            <div class="col-lg-5 col-md-12">
                <img src="img\magnifying-glass-discovery_24908-82373-removebg-preview.png" class="card-img-top object-fit-cover simg img-fluid rounded animated zoomIn" alt="">
            </div>
        </div>
    </div>
</div>
 

  <br>
  
        
 <!-- brand -->
 <h3 class="mb-2" style="font-family: serif;text-align: center; color: #486f8b !important;" > ꧁༺TRUSTED BY JOB HOLDERS FORM ༻꧂ </h3>
 
  <hr class="mx-5" style=" height: 4px; 
  background-color: #000 !important; 
  border: none; ">
  </div>
<div class="container">
  <div class="card-container">
    <!-- <div class="cards">
      <img src="img/google.png" width="40px" alt="Card Image">
    </div>
    <div class="cards">
      <img src="img/ebay.png" alt="Card Image">
    </div> -->
    <div class="cards">
      <img src="img/amazon.png" alt="Card Image">
    </div>
    <div class="cards">
        <img src="img/dropbox.png" alt="Card Image">
      </div>
      <div class="cards">
        <img src="img/google.png" alt="Card Image">
      </div>
      <div class="cards">
        <img src="img/ibm (1).png" alt="Card Image">
      </div>
      <div class="cards">
        <img src="img/micro.png" alt="Card Image">
      </div>
      <div class="cards">
        <img src="img/amazon.png" alt="Card Image">
      </div>
      
    </div>
  </div>
  <hr class="mx-5" style=" height: 4px; 
background-color: #000 !important; 
border: none;  ">
  
  <!-- brand -->
  <br>
   <!-- Slider start  -->
<!-- <div class="offcanvas-body text-dark mx-auto d-block"  > -->
<div class="container-fluid mb-4  p-4 mb-5  rounded scontainer"  >
    <div class="slider">
    <a href="browsjob.php?category=Web Development">
<div class="card  m-1" >
<img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_255,dpr_1.0/v1/attachments/generic_asset/asset/7ead3b2056987e6fa3aad69cf897a50b-1690383161247/ai-artists-2x.png" class="card-img-top object-fit-cover simg" alt="..."  height="300px" >
<div class="card-body text-center">
        <div class="card-overlay">
          <h5 class="card-title stitle" >Web Development</h5>
          <p class="card-text stext" >Build your website!</p>
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
          </div>
        </div></a>
        </div>
      
<div class="card  m-1" >
<img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_255,dpr_1.0/v1/attachments/generic_asset/asset/7ead3b2056987e6fa3aad69cf897a50b-1690383161257/logo-design-2x.png" class="card-img-top object-fit-cover simg" alt="..."  height="300px" >
<a href="browsjob.php?category=Logo Design">
<div class="card-body text-center">
        <div class="card-overlay">
          <h5 class="card-title stitle" >Logo Design</h5>
          <p class="card-text stext" >Build yor brand!</p>
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
          </div></a> 
        </div>
</div>
<div class="card  m-1" >
  <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_255,dpr_1.0/v1/attachments/generic_asset/asset/27f914ed7984fdd2d55aa1fb5e74bd6a-1690384243592/seo-2x.png" class="card-img-top object-fit-cover simg" alt="..."  height="300px" >
  <a href="browsjob.php?category=SEO">
    <div class="card-body text-center">
      <div class="card-overlay">
        <h5 class="card-title stitle" >SEO</h5>
        <p class="card-text stext" >Unlock growth online!</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div>
  </a>       
</div>
<div class="card  m-1" >
  <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_255,dpr_1.0/v1/attachments/generic_asset/asset/7ead3b2056987e6fa3aad69cf897a50b-1690383161247/translation-2x.png" class="card-img-top object-fit-cover simg" alt="..."  height="300px" >
  <a href="browsjob.php?category=Translation">
    <div class="card-body text-center">
      <div class="card-overlay">
        <h5 class="card-title stitle" >Translation</h5>
        <p class="card-text stext" >Go global!</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div>
  </a>
</div>
  
<div class="card  m-1" >
  <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_255,dpr_1.0/v1/attachments/generic_asset/asset/7ead3b2056987e6fa3aad69cf897a50b-1690383161248/data-entry-2x.png" class="card-img-top object-fit-cover simg" alt="..."  height="300px" >
  <a href="browsjob.php?category=Data Entry">
    <div class="card-body text-center">
      <div class="card-overlay">
        <h5 class="card-title stitle" >Data Entry</h5>
        <p class="card-text stext" >learn your business!</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div>
  </a>
</div>
<div class="card  m-1" >
  <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_255,dpr_1.0/v1/attachments/generic_asset/asset/7ead3b2056987e6fa3aad69cf897a50b-1690383161249/social-2x.png" class="card-img-top object-fit-cover simg" alt="..."  height="300px" >
  <a href="browsjob.php?category=Social Media">
    <div class="card-body text-center">
      <div class="card-overlay">
        <h5 class="card-title stitle" >Social Media</h5>
        <p class="card-text stext" >Reach more customer!</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div>
  </a>
</div>
<div class="card  m-1" >
  <img src="https://img.freepik.com/free-photo/smartphone-balancing-with-pink-background_23-2150271746.jpg?size=626&ext=jpg&ga=GA1.1.1336886342.1689108702&semt=sph" class="card-img-top object-fit-cover simg" alt="..."  height="300px" >
  <a href="browsjob.php?category=Mobile Application Developer">
    <div class="card-body text-center">
      <div class="card-overlay">
        <h5 class="card-title stitle" >Mobile App Development</h5>
        <p class="card-text stext" >Try to make popular!</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div>
  </a>
</div>
<div class="card  m-1" >
  <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_255,dpr_1.0/v1/attachments/generic_asset/asset/7ead3b2056987e6fa3aad69cf897a50b-1690383161257/wordpress-2x.png" class="card-img-top object-fit-cover simg" alt="..."  height="300px" >
  <a href="browsjob.php?category=Wordpress">
    <div class="card-body text-center">
      <div class="card-overlay">
        <h5 class="card-title stitle" >Wordpresss</h5>
        <p class="card-text stext" >Customize your site!</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div>
  </a>
  </div>
  
      
  

      
      
    
    </div></div>
          
    <!-- Slider end  -->

      <!-- About Satrt -->
      <div class="container-fluid py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                        <img id="ig" src="https://images.pexels.com/photos/3828834/pexels-photo-3828834.jpeg?auto=compress&cs=tinysrgb&w=600"  class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">

                        <h1 class="display-5 mb-4">Trusted By 20000 + satisfied clients</h1>
                        <p class="mb-4">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eit esdioilore magna aliqua. Ut enim ad minim veniam, 
                            quis nostrud exercitation ullaemco laboeeiris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                            dolor iesdein reprehendeerit in voluptate velit esse cillum dolore.</p>
                        <div class="row g-4 text-dark mb-5">
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2" style="color: rgb(134, 168, 173)!important"></i>Relaible Jobs
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"  style="color: rgb(134, 168, 173)!important"></i>24/7 Customer Support
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"  style="color: rgb(134, 168, 173)!important"></i>Easy Payment Mathods Options
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2" style="color: rgb(134, 168, 173)!important"></i>High Opportunities
                            </div>
                        </div>
                        <a href="" id="bt" class="btn btn-primary py-3 px-5 rounded-pill">About Us<i class="fas fa-arrow-right ps-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

 <!-- jobCategory -->

    <div class="container-fluid mt-5"   >
      <div class="row">
        <div class="col-md-4 ">
          <div class="list-group"  id="ig">
            <h2 class="p-1">Job Category</h2>
            <a href="#" class="list-group-item list-group-item-action " aria-current="true">
             Project Manager
            </a>
            <a href="browsjob.php?category=Social Media Marketing" class="list-group-item list-group-item-action" aria-current="true">social media marketer</a>
            <a href="browsjob.php?category=Web Development" class="list-group-item list-group-item-action">Web Developer</a>
            <a href="browsjob.php?category=Logo Design" class="list-group-item list-group-item-action">logo Desinger</a>
            <a href="browsjob.php?category=Mobile Application Developer" class="list-group-item list-group-item-action">Mobile Application Developer</a>
            <a href="browsjob.php?category=Data Entry" class="list-group-item list-group-item-action">Data Entry</a>
            <a href="browsjob.php?category=Translation" class="list-group-item list-group-item-action">Translation</a>
            <a href="browsjob.php?category=SEO" class="list-group-item list-group-item-action">SEO</a>
            <a href="browsjob.php?category=Wordpress" class="list-group-item list-group-item-action">Wordpress</a>
           
          </div>
</div>

        <div class="col-md-8 p-3" style="background-color: rgb(224, 224, 229);">
          <div class="container">
            <div class="row jobhead">
                <div class="col">
                    <h2>Recommended Jobs</h2>
                </div>
                <div class="col text-end">
                    <button class="btn btn-primary">Latest Jobs</button>
                    <button class="btn btn-warning ms-2">Premium Jobs</button>
                </div>
            </div>
        </div>
      
        <div class="container">
        <?php
$connection = mysqli_connect("localhost", "root", "", "jobform");

$query = "SELECT * FROM form ORDER BY id DESC";
$data = mysqli_query($connection, $query);

$count = 0; // Initialize counter variable

if (mysqli_num_rows($data) > 0) {
    while ($row = mysqli_fetch_assoc($data)) {
        $count++; // Increment counter for each card

        // Card HTML here
        ?>
        <!-- Card -->
        <div class="card mb-2">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <div><?php echo $row['location']; ?></div>
                    <span class="ms-2">4 months ago</span>
                </div>
                <div>
                    <!-- Apply Now button with dynamic job ID -->
                    <?php
                        // Check if user is logged in
                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                            // User is logged in, show Apply Now button
                            ?>
                            <a href="job.php?id=<?php echo $row['id']; ?>">
                                <button id="bt" class="btn btn-primary">Apply Now</button>
                            </a>
                            <?php
                        } else {
                            // User is not logged in, redirect to login page
                            ?>
                            <a href="login.php">
                                <button id="bt" class="btn btn-primary">Login to Apply</button>
                            </a>
                            <?php
                        }
                        ?>
                    <a href="delete.php?no=<?php echo $row['id']?>" class="btn btn-danger btn-sm">DELETE</a>

                    <button class="btn btn-outline-primary ms-2" onclick="toggleLike(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16" id="heartIcon">
                            <path id="heartPath" d="M8 3.879l-.664-.665C5.192 1.747 2.14 1.966.585 3.521c-1.01 1.01-1.01 2.64 0 3.65L8 14l7.415-7.415c1.01-1.01 1.01-2.64 0-3.65-1.555-1.555-4.607-1.774-6.751.193L8 3.879z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['jbTitle']; ?></h5>
                <p class="card-text">$<?php echo $row['salary']; ?></p>
            </div>
        </div>
        <?php

        if ($count >= 4) {
            echo '<a href="browsjob.php" class="more-jobs-link">Find More Jobs</a>'; // Show link after 4 cards
            break; // Exit loop after showing the link
        }
    }
} else {
    echo 'No job details found. &#128533;';
}
?>
</div>

      </div>
    </div>


    
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <!-- JavaScript Libraries -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <!-- <script src="lib/owlcarousel/owl/.carousel.min.js"></script> -->

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
 <script>
    function toggleLike(button) {
        var heartPath = button.querySelector('.bi-heart');
        if (heartPath.classList.contains('liked')) {
            heartPath.classList.remove('liked');
        } else {
            heartPath.classList.add('liked');
        }
    }
</script>

<!-- JavaScript code -->
<script>
    // Function to handle Apply Now button click
    function handleApplyNowClick() {
        // Get the job details by sending an AJAX request to get_job_details.php
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Redirect the user to jobD.html with the received job details as query parameters
                window.location.href = "jobD.html?" + this.responseText;
            }
        };
        xhttp.open("GET", "get_job_details.php", true);
        xhttp.send();
    }

    // Attach click event listener to all Apply Now buttons
    var applyButtons = document.querySelectorAll(".btn.btn-primary");
    applyButtons.forEach(function(button) {
        button.addEventListener("click", handleApplyNowClick);
    });

    $(document).ready(function(){
    $('.slider').slick({
      slidesToShow:4, // Show four slides per row initially
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      prevArrow: '<button type="button" class="slick-prev">Previous</button>',
      nextArrow: '<button type="button" class="slick-next">Next</button>',
      responsive: [
        {
          breakpoint: 992, // Change settings when screen width is less than 992px
          settings: {
            slidesToShow: 1 // Show one slide per row on smaller screens
          }
        }
      ]
    });
});
//   window.addEventListener('scroll', function() {
//     var navbar = document.querySelector('.navbar');
//     if (window.scrollY > 0) {
//         navbar.classList.add('navbar-scroll');
//     } else {
//         navbar.classList.remove('navbar-scroll');
//     }
// });
window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    if (window.scrollY > 100) { // Change 100 to the desired distance from the top before the color change occurs
        navbar.classList.remove('background-blue');
        navbar.classList.add('bg-dark', 'navbar-scroll');
    } else {
        navbar.classList.remove('bg-dark', 'navbar-scroll');
        navbar.classList.add('background-blue');
    }
});

  //  JavaScript code to handle navbar scroll behavior
  //  window.addEventListener('scroll', function() {
  //       var navbar = document.getElementById('navbar');
  //       if (window.scrollY > 0) {
  //           navbar.classList.remove('navbar-transparent');
  //           navbar.classList.add('navbar-scroll');
  //       } else {
  //           navbar.classList.remove('navbar-scroll');
  //           navbar.classList.add('navbar-transparent');
  //       }
  //   });
</script>

</body>
</html>
