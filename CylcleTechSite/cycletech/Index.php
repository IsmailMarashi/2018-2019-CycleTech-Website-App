<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" type="text/css" href="Stylesheet.css" />
  <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">




</head>
<style>

    .nav-item a:hover {
          color: #35b729!important;
          cursor: pointer;
      }



          .dropdown-menu a:hover {
          color: #35b729!important;
          cursor: pointer;
      }
  </style>




<body>


    <nav class="navbar navbar-expand-lg  fixed-top navbar-light  bg-light">
        <a class="navbar-brand" href="Index.php"><h4>Cycle<span style="color: #35b729">Tech</span></h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse  navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mr-auto ">
               <li class="nav-item active">
          <a class="nav-link" href="Index.php">Home <span class="sr-only">(current)</span></a>
        </li>
                <li class="nav-item"><a class="nav-link" href="AboutUs.php">About Us</a></li>

                </li>
                <li class="nav-item"><a class="nav-link" href="BookNow.php">Book Now </a></li>

                </li>
                 <li class="nav-item"><a class="nav-link" href="Locations.php">Our Locations</a></li>

                </li>

                <li class="nav-item"><a class="nav-link" href="ContactUs.php">Contact Us</a></li>
               </ul>
            

        <ul  class="nav navbar-nav ">
        <li class="nav-item dropdown">
<a style="color:#35b729; !important;" class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button" aria-haspopup="true" aria-expanded="false">
Welcome,  <?php echo htmlspecialchars($_SESSION["Email"]);?> 
</a>
<div style="background-color:#f2f2f2;" class="dropdown-menu" aria-labelledby="Preview">
<!---<a style="color:#8c8c8c;" class="dropdown-item" href="#">Update Info</a>
<a style="color:#8c8c8c;" class="dropdown-item" href="">Report bike</a>
<a style="color:#8c8c8c;" class="dropdown-item" href="reset-password.php">Reset Password</a> --->
<a style="color:#8c8c8c;" class="dropdown-item" href="logout.php">Sign Out</a>

</div>
</li>
            </ul>

        </div>
    </nav>

  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 font-weight-normal">Cycle<span style="color: #35b729">Tech</span></h1>
      <p class="lead font-weight-normal">Affordable, efficient and reliable. Book your bike today. </p>
      <a class="btn btn-outline-success" href="book.php">Book now</a>
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
  </div>
  
  <div class="container-fluid">
    
    <div class="card-deck w-75 mx-auto">
      <div class="card">
        <img class="card-img-top" src="images/wayne-bishop-5737-unsplash.jpg" alt="image" height="200">
        <div class="card-body">
          <h5 class="card-title">How it works</h5>
          <p class="card-text">Simply pay at the bike station and hire your bike.
          </p>
          <a href="AboutUs.php" class="btn btn-success">Learn More</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images/dominik-resek-1122016-unsplash.jpg" alt="image" height="200">
        <div class="card-body">
          <h5 class="card-title">Bike Stations</h5>
          <p class="card-text">Convenient bike stations accesible across the city.</p>
          <a href="Locations.php" class="btn btn-success">Learn More</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images/adli-wahid-1160249-unsplash.jpg" alt="image" height="200">
        <div class="card-body">
          <h5 class="card-title">Pricing</h5>
          <p class="card-text">Affordable pricing through out the city.</p>
          <a href="book.php" class="btn btn-success">Learn More</a>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>







</body>


<!-- Footer -->
<footer style="padding-top: 40px;" class="page-footer">



    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright CycleTech
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

</html>
















