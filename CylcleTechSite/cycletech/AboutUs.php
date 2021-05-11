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
  <title>About Us</title>
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


    <nav class="navbar navbar-expand-lg  fixed-top navbar-light bg-light">
        <a class="navbar-brand" href="Index.php"><h4>Cycle<span style="color: #35b729">Tech</span></h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
               <li class="nav-item">
          <a class="nav-link" href="Index.php">Home</a>
        </li>
                <li class="nav-item active"><a class="nav-link" href="AboutUs.php">About Us <span class="sr-only">(current)</span></a></li>

               
                <li class="nav-item"><a class="nav-link" href="BookNow.php">Book Now</a></li>

                 <li class="nav-item"><a class="nav-link" href="Locations.php">Our Locations</a></li>

                

                <li class="nav-item"><a class="nav-link" href="ContactUs.php">Contact Us</a></li>
</ul>


<ul  class="nav navbar-nav ">
        <li class="nav-item dropdown">
<a style="color:#35b729;" class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button" aria-haspopup="true" aria-expanded="false">
Welcome, <?php echo htmlspecialchars($_SESSION["Email"]);?> 
</a>
<div style="background-color:#f2f2f2;" class="dropdown-menu" aria-labelledby="Preview">
<!---<a style="color:#8c8c8c;" class="dropdown-item" href="#">Update Info</a>
<a style="color:#8c8c8c;" class="dropdown-item" href="">Report bike</a>
<a style="color:#8c8c8c;" class="dropdown-item" href="reset-password.php">Reset Password</a>--->
<a style="color:#8c8c8c;" class="dropdown-item" href="logout.php">Sign Out</a>
</div>
</li>
            
            </ul>
        </div>
    </nav>
    

     



  <div style="padding-top: 100px;" class="container">
  <div class="row">

 
 <div class="col-md-7">
    <div style="height:400px; width:100%;" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<!-- <h2 style="padding-bottom: 30px; text-align: center;"> ABOUT US</h2> -->
  <div  class="carousel-inner">
    <div class="carousel-item active">
      <img style="height:400px; width:100%;"  src="images/bicyles/aboutus.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img style="height:400px; width:100%;"  src="login2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img style="height:400px; width:100%;"  src="welcome2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img style="height:400px; width:100%;"  src="welcome1.jpg" alt="Third slide">
    </div>
  </div>

  <a style="padding-top: 200px;" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a style="padding-top: 200px;" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

    <div class="col-md-5 bg-light">
      <h2 style=" text-align:center; align-content:justify; padding-top: 50px; "> ABOUT US</h2>
      <p style="color: black; font-size:20px; ">Cycle Tech is a bike rental service company located in Dubai with its headquarters at Heriot-Watt. It is dedicated to providing you with the best bike rental services in Dubai. It has high quality bikes at affordable prices with biking gears available at selected locations. Around since 2012.  <br><br>  
        <div class="col text-center"><a  class="btn btn-success" href="BookNow.html">Book now</a> </p> </div>
    </div>





</div></div>



<div style="padding-top: 80px !important; padding:130px; " class="container-fluid bg-3 text-center">    
  <h3 class="margin">HOW IT WORKS <span class="glyphicon glyphicon-cog"></span></h3><br>
  <div  class="row">
    <div style="background-color:#b3e6b3 ; font-size:20px;  " class="col-sm-4">
      <h3 style="padding-top: 20px;">Step 1</h3>
      <p >Create an account, login and make bike selection.</p>
      
    </div>
    <div style=" font-size:20px; " class="col-sm-4"> 
      <h3 style="padding-top: 20px;">Step 2</h3>
      <p>Make reservation and payment  of selected bike(s).</p>
     
    </div>
    <div style="background-color:#b3e6b3 ; font-size:20px;"  class="col-sm-4"> 
      <h3 style="padding-top: 20px;">Step 3</h3>
      <p>Collect bike(s) at your location of choice.</p>
     
    </div>
  </div>
</div>


<div style="margin:0 auto; " class="col-md-7">
  <h1 style="text-align: center;">OUR TEAM</h1>
    <div style="height:400px; width:100%;" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<!-- <h2 style="padding-bottom: 30px; text-align: center;"> ABOUT US</h2> -->
  <div  class="carousel-inner">
    <div class="carousel-item active">
      <img style="height:400px; width:100%;"  src="all.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img style="height:400px; width:100%;"  src="2.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img style="height:400px; width:100%;"  src="3.jpeg" alt="Second slide">
    </div>

  <a style="padding-top: 200px;" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a style="padding-top: 200px;" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>





 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

        
</body>

<!-- Footer -->
<footer  class="page-footer bottom">

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright CycleTech
    </div>
    <!-- Copyright -->

  </footer>

</html>