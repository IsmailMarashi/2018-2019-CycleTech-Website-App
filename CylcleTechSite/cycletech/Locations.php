<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Our Locations</title>


  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" type="text/css" href="Stylesheet.css" />
  <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGBwT67LvqH8S91RtDS56UZ7kI6eeU10w" type="text/javascript"></script>

</head>
<style>
    .nav-item a:hover {
          color: #35b729!important;
          cursor: pointer;
      }

            #map-canvas
            {
                width: 400px;
                height: 400px;
                }


    .cover-container {
    height: 250px;
    width: 100%;
    white-space: nowrap;
    overflow-x: scroll;
    overflow-y: hidden;
    border-color:#e0e0d1;
     border-style:solid;

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
            <ul class="navbar-nav navbar-right mr-auto ">
               <li class="nav-item">
          <a class="nav-link" href="Index.php">Home</a>
        </li>
                <li class="nav-item"><a class="nav-link" href="AboutUs.php">About Us</a></li>

               
                <li class="nav-item"><a class="nav-link" href="BookNow.php">Book Now</a></li>

                 <li class="nav-item active"><a class="nav-link" href="Locations.php">Our Locations <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="ContactUs.php">Contact Us</a></li>

                   </ul>

<ul  class="nav navbar-nav ">
        <li class="nav-item dropdown">
<a style="color:#35b729;" class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button" aria-haspopup="true" aria-expanded="false">
Welcome, <?php echo htmlspecialchars($_SESSION["Email"]);?> 
</a>
<div style="background-color:#f2f2f2;" class="dropdown-menu" aria-labelledby="Preview">
<!----<a style="color:#8c8c8c;" class="dropdown-item" href="#">Update Info</a>
<a style="color:#8c8c8c;" class="dropdown-item" href="">Report bike</a>
<a style="color:#8c8c8c;" class="dropdown-item" href="reset-password.php">Reset Password</a> --->
<a style="color:#8c8c8c;" class="dropdown-item" href="logout.php">Sign Out</a>
</div>
</li>
            
            </ul>
        </div>
    </nav>

  

    <div style="height:500px; width:100%; padding-top:70px; padding-left:30px;  padding-bottom:100px; " id="carouselExampleIndicators" class="carousel slide bg-light" data-ride="carousel">
 <h2 style="text-align:center;  padding-top:30px; padding-bottom: 15px;"><span class="glyphicon glyphicon-map-marker">OUR LOCATIONS</h2>

  <div  class="carousel-inner">
    <div  class="carousel-item active">
     <img style="height:400px; width:98%;" src="images/bicyles/hw.jpg" alt="Heriot-Watt">
         <div style=" " class="carousel-caption">
        <h1 style="color: white; font-size: 40px !important;">Heriot-Watt University</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img style="height:400px; width:98%;"  src="images/bicyles/moe.jpg" alt="MOE">
        <div style=" " class="carousel-caption">
        <h1 style="color: white; font-size: 40px !important;">Mall of the Emirates</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img style="height:400px; width:98%;"  src="images/bicyles/dm.jpg" alt="Dubai-Marina">
        <div style=" " class="carousel-caption">
        <h1 style="color: white; font-size: 40px !important;">Dubai Marina</h1>
      </div>
    </div>
      <div class="carousel-item">
      <img style="height:400px; width:98%;"  src="images/bicyles/1.jpg" alt="Burj-Al-Arab">
        <div style=" " class="carousel-caption">
        <h1 style="color: white; font-size: 40px !important;">Burj Al Arab</h1>
      </div>
    </div>
      <div class="carousel-item">
      <img style="height:400px; width:98%;"  src="images/bicyles/pm.jpg" alt="Third slide">
        <div style=" " class="carousel-caption">
        <h1 style="color: white; font-size: 40px !important;">Palm Jumeirah</h1>
      </div>
    </div>
  </div>
      <div class="carousel-item">
      <img style="height:400px; width:98%;"  src="images/bicyles/jm.jpg" alt="Jumeirah Beach">
        <div style=" " class="carousel-caption">
        <h1 style="color: white; font-size: 40px !important;">Jumeirah Beach</h1>
      </div>
    </div>
  </div>
  <a style="padding-top: 300px;" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a style="padding-top: 300px;" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





















<div style="padding: 100px;" class="container bg-light">

<div class ="col-sm-12">
<div id="map-canvas" style="margin: auto; width: 100%; height:500px "></div>
</div>

        <div style="padding-left: 30px;" class="row">
           
  <div class="dropdown">
  <button   class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    WHERE FROM:
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

    <button class="dropdown-item" type="button" id="1">Mall of the Emirates</button>
    <button class="dropdown-item" type="button" id="2">Dubai Mall</button>
    <button class="dropdown-item" type="button" id="3">Heriot-Watt University</button>
    <button class="dropdown-item" type="button" id="4">Burj Al Arab</button>
    <button class="dropdown-item" type="button" id="5">Dubai Airport Terminal 1</button>
    <button class="dropdown-item" type="button" id="6">Jumeirah Beach</button>
    <button class="dropdown-item" type="button" id="7">Dubai Marina</button>
    
  </div>
</div>

 
<div style="padding-left:630px;" class="col-sm-8">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
    WHERE TO:
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu3">

    <button class="dropdown-item" type="button" id="11">Mall of the Emirates</button>
    <button class="dropdown-item" type="button" id="22">Dubai Mall</button>
    <button class="dropdown-item" type="button" id="33">Heriot-Watt University</button>
    <button class="dropdown-item" type="button" id="44">Burj Al Arab</button>
    <button class="dropdown-item" type="button" id="55">Dubai Airport Terminal 1</button>
    <button class="dropdown-item" type="button" id="66">Jumeirah Beach</button>
    <button class="dropdown-item" type="button" id="77">Dubai Marina</button>
    
  </div>
</div> 




<button id="get" style="text-align: center; display: block; width:100px; ">Get Route</button>
</div>
</div>
</div>




<!-- RAMZAN'S EDITS ABOVE-->


            <script>

            var directionsDisplay = new google.maps.DirectionsRenderer();
            var directionsService = new google.maps.DirectionsService();

            var map;

            var your_location = new google.maps.LatLng(25.118812, 55.200273);
            var goal_location = new google.maps.LatLng(25.080760, 55.139803);

            var mapOptions = 
            {
                zoom: 10,
                center: your_location
            };

            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  // RAMZAN'S EDITS BELOW            

  var mall_of_the_emirates = {
    lat: 25.118812,
    lng: 55.200273
  };

  var dubai_mall = {
    lat: 25.197419,
    lng: 55.279240
  };

  var heriot_watt = {
    lat: 25.129395,
    lng: 55.416492
  };

  var burj_al_arab = {
    lat: 25.141348,
    lng: 55.185353
  };

  var dubai_airport = {
    lat: 25.245603, 
    lng: 55.359824  
  };

  var jumeirah_beach = {
    lat: 25.193954, 
    lng: 55.231587
  };

  var dubai_marina = {
    lat: 25.080760,
    lng: 55.139803
  };
  

  var marker1 = new google.maps.Marker({
    position: mall_of_the_emirates,
    map: map,
    title: 'Mall of the Emirates'
  });

  var marker2 = new google.maps.Marker({
    position: dubai_mall,
    map: map,
    title: 'Dubai Mall'
  });

  var marker3 = new google.maps.Marker({
    position: heriot_watt,
    map: map,
    title: 'Heriot-Watt University!'
  });

  var marker4 = new google.maps.Marker({
    position: burj_al_arab,
    map: map,
    title: 'Burj Al Arab'
  });

  var marker5 = new google.maps.Marker({
    position: dubai_airport,
    map: map,
    title: 'Dubai Airport Terminal 1'
  });

  var marker6 = new google.maps.Marker({
    position: jumeirah_beach,
    map: map,
    title: 'Jumeirah Beach'
  });

  var marker7 = new google.maps.Marker({
    position: dubai_marina,
    map: map,
    title: 'Dubai Marina'
  });

        document.getElementById('1').onclick=function()
            {
                your_location = mall_of_the_emirates;
            }

            document.getElementById('2').onclick=function()
            {
                your_location = dubai_mall;
            }

            document.getElementById('3').onclick=function()
            {
                your_location = heriot_watt;
            }

      document.getElementById('4').onclick=function()
            {
                your_location = burj_al_arab;
            }

            document.getElementById('5').onclick=function()
            {
                your_location = dubai_airport;
            }

            document.getElementById('6').onclick=function()
            {
                your_location = jumeirah_beach;
            }

            document.getElementById('7').onclick=function()
            {
                your_location = dubai_marina;
            }

            document.getElementById('11').onclick=function()
            {
                goal_location = mall_of_the_emirates;
            }

            document.getElementById('22').onclick=function()
            {
                goal_location = dubai_mall;
            }

            document.getElementById('33').onclick=function()
            {
                goal_location = heriot_watt;
            }

      document.getElementById('44').onclick=function()
            {
                goal_location = burj_al_arab;
            }

            document.getElementById('55').onclick=function()
            {
                goal_location = dubai_airport;
            }

            document.getElementById('66').onclick=function()
            {
                goal_location = jumeirah_beach;
            }

            document.getElementById('77').onclick=function()
            {
                goal_location = dubai_marina;
            }

  // RAMZAN'S EDITS ABOVE


            directionsDisplay.setMap(map);

            function calculateRoute()
            {
                var request =
                {
                origin: your_location,
                destination: goal_location,
                travelMode: 'WALKING'
                };

                directionsService.route(request, function(result, status)
                {

                if(status == "OK")  
                {
                    directionsDisplay.setDirections(result);
                }
                });

            }

            document.getElementById('get').onclick=function()
            {
                calculateRoute();
            }


            </script>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>






        
</body>


<footer class="page-footer bottom">

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright CycleTech
    </div>
    <!-- Copyright -->

  </footer>

</html>