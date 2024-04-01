<?php
// Start the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/index.css"/>
</head>
<style>
   
        /* Add your custom styles here */
        .navbar-scroll {
            background-color: black !important;
            transition: background-color 0.3s ease;
            color:white !important;
        }
        .navbar-scroll .nav-link {
            
            color:white !important;
        }
        .background-blue{
  background-color:rgba(134, 168, 173) !important;
}
a:hover{
    transform: scale(1.2);
}
#bt:hover{
    color:black !important;
}
#ptag{
    font-size:20px;
}
#bt{
    /* background-color:rgb(134, 168, 173)!important; */
  border:5px solid white!important;
  background-color:rgba(134, 168, 173) !important;
} 

    </style>
</style>
<body>

<nav id="navbar" class="navbar navbar-expand-lg  sticky-top background-blue" >
    <div class="container ">
        <i class="navbar-brand" style="font-family: fantasy; font-size: 30px;" href="#"> <img src="img/logo3.png" width="80px" alt=""> </i>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mt-2 mx-2 text-light">
                    <?php
                    // Check if the user is logged in
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        // User is logged in, display "Hello, username" in navbar
                        echo ' <p id="ptag">Hello ' . $_SESSION["username"].'!</p>';
                    } else {
                        // User is not logged in, display login/signup links in navbar
                        echo 'Hello Guest';
                   
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a id="bt" class="nav-link active text-light btn btn-primary border-0   " aria-current="page" href="browsjob.php"  style="background-color: green!important;">FIND JOB ⇝</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">BLOG</a>
                </li>
            </ul>
          
            <ul class="navbar-nav">
                
            <li class="nav-item">
                    <a class="nav-link text-light" href="form1.php">Post Job</a>
                </li>
                <a href="login.php" id="bt"class="btn btn-primary border-0 rounded-pill  m-1 px-4  animated bounceInLeft"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
                <a href="signup.php" id="bt"  class="btn btn-primary border-0 rounded-pill  m-1 px-4  animated bounceInLeft" ><i class="fa fa-sign-in" aria-hidden="true"></i> Signup</a>
                <a href="logout.php" id="bt"  class="btn btn-primary border-0 rounded-pill  m-1 px-4  animated bounceInLeft" ><i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </ul>
        </div>
    </div>
</nav>
<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Bootstrap Bundle (Bootstrap JS and Popper.js) -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    // JavaScript code to handle navbar scroll behavior
  
   // JavaScript code to handle navbar scroll behavior
 
</script>
</body>
</html>
