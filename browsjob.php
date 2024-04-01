<?php
session_start();
// Establish connection
$connection = mysqli_connect("localhost", "root", "", "jobform");

// Pagination logic
$limit = 6; // Number of records per page
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$offset = ($page - 1) * $limit;

// Filter by category
if(isset($_GET['category'])) {
    $category = $_GET['category'];
    $categoryQuery = "AND 	jbTitle = '$category'";
} else {
    $categoryQuery = "";
}

// Search query
if(isset($_GET['query'])) {
    $searchText = $_GET['query'];
    $searchQuery = "AND (jbTitle LIKE '%$searchText%' OR jbDescription LIKE '%$searchText%')";
} else {
    $searchQuery = "";
}

// Query to fetch job listings
$query = "SELECT * FROM form WHERE 1 $categoryQuery $searchQuery ORDER BY id DESC LIMIT $offset, $limit";
$data = mysqli_query($connection, $query);
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
  .navbar{
    background-color:black !important;
  }
  /* Custom CSS for the search bar */
.search-form {
    display: flex;
    align-items: center;
    position: relative;
}

.search-input {
    width: 100%;
    padding: 10px 40px 10px 10px; /* Adjust padding for the icon */
    border-radius: 50px;
    border: 1px solid #ced4da;
    background-color: #e3f2fd !important;
    color:black !important;
    
}

.search-icon {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 10px;
    color: #6c757d; /* Adjust color as needed */
    cursor: pointer;
}
.search-input::placeholder {
    color: black !important; /* Adjust placeholder color as needed */
}
@media only screen and (max-width: 768px) {
    .search-input {
        width: 100%;
        margin-left: 4%;
    }
}
#bt{
  background-color: rgb(134, 168, 173)!important
} 
#bt:hover{
    color:black !important;
    transition:0.5s ease;
}
</style>
<body>
<!-- <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent sticky-top" style="background-color: #e3f2fd !important;">
    <div class="container ">
        <i class="navbar-brand " style="font-family: fantasy; font-size: 30px;" href="#"> <img src="img/logo3.png" width="80px" alt="">  WORK WAVE</i>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="browsjob.php">FIND JOB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PEOPLE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">EDUCATION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BLOG</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-info" type="submit">Search</button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="form.html">Post Job</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="openLoginModal()">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.html">Signup</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->
<?php include 'navbar.php'; ?>

<!-- Search Bar -->
<div class="container mt-3">
    <form class="search-form" action="browsjob.php" method="GET">
        <input class="form-control search-input rounded-5 shadow" type="search" name="query" placeholder="Search" aria-label="Search"  id="searchBar">
        <button type="submit" class="bi bi-search search-icon" onclick="searchJobs()"></button>
    </form>
</div>
<div class="container mt-5 mb-5">
    <div class="container mt-5 mb-5" id="job-listings">
        <!-- Job Listings -->
        <?php
            // Display job listings
            if (mysqli_num_rows($data) > 0) {
                while ($row = mysqli_fetch_assoc($data)) {
                    ?>
                    <!-- Card -->
                    <div class="card mb-2">
                        <!-- Card header -->
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <div><?php echo $row['location']; ?></div>
                                <span class="ms-2">4 months ago</span>
                            </div>
                            <div>
                                <a href="job.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" id="bt">Apply Now</a>
                                <a href="delete.php?no=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">DELETE</a>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['jbTitle']; ?></h5>
                            <p class="card-text">$<?php echo $row['salary']; ?></p>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo 'No job details found. &#128533;';
            }
            ?>
        </div>
    </div>

   <!-- Pagination -->
   <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center mt-3">
        <?php
        // Count total number of records
        $totalRecordsQuery = "SELECT COUNT(*) as total FROM form WHERE 1 $searchQuery";
        $totalRecordsResult = mysqli_query($connection, $totalRecordsQuery);
        $totalRecordsRow = mysqli_fetch_assoc($totalRecordsResult);
        $totalRecords = $totalRecordsRow['total'];

        // Calculate total number of pages
        $totalPages = ceil($totalRecords / $limit);
// Include search query parameters in pagination links
$searchParams = isset($_GET['query']) ? "&query=" . urlencode($_GET['query']) : ""; // Get search query parameters

// Display pagination links
for ($i = 1; $i <= $totalPages; $i++) {
    // Highlight the current page
    $activeClass = ($i == $page) ? 'active' : '';

    // Generate pagination link with search query parameters
    $paginationLink = "browsjob.php?page=$i$searchParams";

    echo '<li class="page-item ' . $activeClass . '"><a class="page-link" href="' . $paginationLink . '">Page ' . $i . '</a></li>';
}
        ?>
    </ul>
</nav>


    </div>
</div>

<?php include 'footer.php'; ?>

<!-- Login Modal -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
   function searchJobs() {
        var searchText = $('#searchBar').val().toLowerCase(); // Search input ka text hasil karein

        // Har job listing ko loop karein aur search input ke mutabiq filter karein
        $('#job-listings .card').each(function() {
            var jobTitle = $(this).find('.card-title').text().toLowerCase();
            var jobDescription = $(this).find('.card-text').text().toLowerCase();

            if (jobTitle.includes(searchText) || jobDescription.includes(searchText)) {
    $(this).show(); // Job listing ko dikhayein agar text milta hai
} else {
    $(this).hide(); // Job listing ko chhupayein agar text nahi milta
}
        });
    }

  
</script>

</body>
</html>
