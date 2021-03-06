<?php

session_start();
$cookie_name = user;
$data = json_decode($_COOKIE[$cookie_name], true);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
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
        <a class="navbar-brand" href="Index.html"><h4>Cycle<span style="color: #35b729">Tech</span></h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
               <li class="nav-item">
          <a class="nav-link" href="Index.php">Home</a>
        </li>
                <li class="nav-item active"><a class="nav-link" href="AboutUs.html">About Us <span class="sr-only">(current)</span></a></li>

               
                <li class="nav-item"><a class="nav-link" href="BookNow.html">Book Now</a></li>

                 <li class="nav-item"><a class="nav-link" href="Locations.html">Our Locations</a></li>

                

                <li class="nav-item"><a class="nav-link" href="ContactUs.html">Contact Us</a></li>

                </ul>
<ul  class="nav navbar-nav ">
        <li class="nav-item dropdown">
<a style="color:#35b729;" class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button" aria-haspopup="true" aria-expanded="false">
Welcome, <?php echo htmlspecialchars($_SESSION["Email"]);?> 
</a>
<div style="background-color:#f2f2f2;" class="dropdown-menu" aria-labelledby="Preview">
<!--<a style="color:#8c8c8c;" class="dropdown-item" href="#">Update Info</a>
<a style="color:#8c8c8c;" class="dropdown-item" href="">Report bike</a>
<a style="color:#8c8c8c;" class="dropdown-item" href="reset-password.php">Reset Password</a>--->
<a style="color:#8c8c8c;" class="dropdown-item" href="logout.php">Sign Out</a>
</div>
</li>
            
            </ul>
        </div>
    </nav>

    

    

 <div style="height:400px; width:80%; padding-top:100px; margin:0 auto;  " id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
 <h2 style="padding-bottom: 20px;"> Thank you! </h2>

  <div style="padding-top: 0px !important; padding:50px; " class="container-fluid bg-3 text-center">    
  <h3 class="margin">YOUR ORDER<span class="glyphicon glyphicon-cog"></span></h3><br>
  <div  class="row">
    <div style="background-color:#b3e6b3 ; font-size:20px;  " class="col-sm-4">
      <h3 style="padding-top: 20px;">Item 1</h3>
      <p>Bike #6</p>
      <p><img style="height: 200px; width: 230px; margin:0 auto; padding-top:30px; " class="card-img-top" src="images/bicyles/b6.jpg" alt="Bike 1"></p>
      <p>4h<br>120 AED</p>

    </div>
    <div style="background-color:#b3e6b3 ; font-size:20px;" class="col-sm-4"> 
      <h3 style="padding-top: 20px;">Item 2</h3>
      <p>Bike #3</p>
      <p><img style="height: 200px; width: 230px; margin:0 auto; padding-top:30px; " class="card-img-top" src="images/bicyles/b3.jpg" alt="Bike 2"></p>
      <p>2h<br>60 AED</p>
     
    </div>
    <div style="background-color:#b3e6b3 ; font-size:20px;"  class="col-sm-4"> 
      <h3 style="padding-top: 20px;">Item 3</h3>
      <p>Bike #4</p>
      <p><img style="height: 200px; width: 230px; margin:0 auto; padding-top:30px; " class="card-img-top" src="images/bicyles/b4.jpg" alt="Bike 3"></p>
      <p>1h<br>30 AED</p>
     
    </div>
  </div>
</div>

<!--
<?php

foreach ($data as $value)
{
echo $value;
}

?>
-->


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
    <div class="footer-copyright text-center text-black-50 py-3">?? 2019 Copyright CycleTech
    </div>
    <!-- Copyright -->

  </footer>

</html>