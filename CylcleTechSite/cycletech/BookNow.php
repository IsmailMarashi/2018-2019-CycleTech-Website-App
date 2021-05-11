<?php
// Initialize the session
session_start();

$cookie_name = "user";
$cookie_value[0] = 0;
$cookie_value[1] = $_SESSION["Email"];

  if (isset($_GET['1'])) 
  {
    array_push($cookie_value, 31);
  }

  if (isset($_GET['2'])) 
  {
    array_push($cookie_value, 32);
  }

  if (isset($_GET['3'])) 
  {
    array_push($cookie_value, 33);
  }

  if (isset($_GET['4'])) 
  {
    array_push($cookie_value, 34);
  }

  if (isset($_GET['5'])) 
  {
    array_push($cookie_value, 35);
  }

  if (isset($_GET['6'])) 
  {
    array_push($cookie_value, 36);
  }

  if (isset($_GET['7'])) 
  {
    array_push($cookie_value, 37);
  }

  if (isset($_GET['8'])) 
  {
    array_push($cookie_value, 38);
  }

  if (isset($_GET['9'])) 
  {
    array_push($cookie_value, 39);
  }

  if (isset($_GET['10'])) 
  {
    array_push($cookie_value, 40);
  }

  if (isset($_GET['11'])) 
  {
    array_push($cookie_value, 41);
  }

  if (isset($_GET['12'])) 
  {
    array_push($cookie_value, 42);
  }


/*
NOT IN HEADER

<form method="post">
    <input type="submit" name="test" id="test" value="RUN" /><br/>
</form>

*/


/*
USING FUNCTION ON KEY PRESS

function testfun()
{
   $cookie_value[3] = 9;
}

if(array_key_exists('test',$_POST))
{
   testfun();
}
*/


/*
USING DOCUMENT.GETBYID

            document.getElementById('11111').onclick=function()
            {
            array_push($cookie_value, 9);
            }

            document.getElementById('222').onclick=function()
            {
            <?php
            array_push($cookie_value, 9);
            ?>
            }

*/


/*
USING JAVASCRIPT

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">

function doSomething()
{
    $.get("BookNow.php");
    array_push($cookie_value, 9);
    return false;
}
</script>
*/






setcookie($cookie_name, json_encode($cookie_value), time() + (86400 * 30), "/");
?>





 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BookNow</title>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" type="text/css" href="Stylesheet.css" />
  <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGBwT67LvqH8S91RtDS56UZ7kI6eeU10w&libraries=visualization" type="text/javascript"></script>



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


      h6{

        text-align:center;
      }


      .card-text{
   
   text-align:center;




      }
            #map-canvas
            {
                width: 100%;
                height: 400px;
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

               
                <li class="nav-item active"><a class="nav-link" href="BookNow.php">Book Now <span class="sr-only">(current)</span></a></li>

                 <li class="nav-item"><a class="nav-link" href="Locations.php">Our Locations</a></li>

                

                <li class="nav-item"><a class="nav-link" href="ContactUs.php">Contact Us</a></li>

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

<div id="map-canvas" style="margin: auto; width: 100%;"></div>

            <button id="get" style="text-align: center; display: block; margin: 0 auto;">Get Route</button>

      <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position: relative; float:right; z-index:99" >
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

<!-- MAP API-->

            <script>

            var directionsDisplay = new google.maps.DirectionsRenderer();
            var directionsService = new google.maps.DirectionsService();

            var map;
            var heatmap;

            var your_location = new google.maps.LatLng(25.118812, 55.200273);
            var goal_location = new google.maps.LatLng(25.080760, 55.139803);

            var mapOptions = 
            {
                zoom: 10,
                center: your_location
            };

            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);



// HEATMAP

heatmap = new google.maps.visualization.HeatmapLayer({
          data: getPoints(),
          map: map
        });

heatmap.set('radius', heatmap.get('radius') ? null : 25);

function getPoints() {
        return [
          new google.maps.LatLng(25.118812, 55.200273),
          new google.maps.LatLng(25.118812, 55.200273),
          new google.maps.LatLng(25.118812, 55.200273),
          new google.maps.LatLng(25.118812, 55.200273),
          new google.maps.LatLng(25.118812, 55.200273),
          new google.maps.LatLng(25.197419, 55.279240),
          new google.maps.LatLng(25.197419, 55.279240),
          new google.maps.LatLng(25.197419, 55.279240),
          new google.maps.LatLng(25.197419, 55.279240),
          new google.maps.LatLng(25.197419, 55.279240),
          new google.maps.LatLng(25.129395, 55.416492),
          new google.maps.LatLng(25.141348, 55.185353),
          new google.maps.LatLng(25.245603, 55.359824),
          new google.maps.LatLng(25.193954, 55.231587),
          new google.maps.LatLng(25.080760, 55.139803),

        ];
      }

// LOCATIONS
            
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
 
 // MARKERS

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

// BUTTONS

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





     <div style="padding: 100px;" class="col">
            <h2 style="text-align:center;">BIKES</h2>
            <div class="row">


                <div style="padding: 30px;" class="col-12 col-md-6 col-lg-4">
                    <div style="height: 350px; width:300px; " class="card">
                        <img style="height: 200px; width: 230px; margin:0 auto; padding-top:30px; " class="card-img-top" src="images/bicyles/b6.jpg" alt="Card image cap">
                        <div  class="card-body">
                       <!--     <h6 class="card-title"><a href="product.html" title="View Product">View Bike</a></h6> -->
                      <h6 class="card-title"><a href="#myModal" data-toggle="modal">View Bike</a></h6>
                      <div style="padding-top: 50px; width:100%; " id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div  class="modal-dialog">
                                       <div class="modal-content">
                                              <div class="modal-body">
                  <img  src="images/bicyles/b6.jpg" class="img-responsive" style="width:450px; margin:0 auto !important; ">
                    <p style="width: 100%; text-align: center;" class="modal-text">All-new WSD frame geometry puts you in a position of power with a faster, more stable ride. Ride smoother, ride longer, ride faster.</p>
                     </div>
                     </div>
                     </div>
                    </div>
                            <p  class="card-text"><b style="color:#ff3333;">Price: </b><b>AED 45/ 1hr</b></p>
                             <a style="text-align: center;" href="BookNow.php?1=true" class="btn btn-success btn-block" id="11111">Add to cart</a>
                        </div>
                    </div>
                </div>










                <div style="padding: 30px;" class="col-12 col-md-6 col-lg-4">
                    <div style="height: 350px; width:300px; " class="card">
                        <img style="height: 200px; width: 230px; margin:0 auto; padding-top:30px; " class="card-img-top" src="images/bicyles/b7.jpg" alt="Card image cap">
                        <div  class="card-body">
                            <h6 class="card-title"><a href="#myModal1" data-toggle="modal">View Bike</a></h6>
                      <div style="padding-top: 70px; width:100%; " id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div  class="modal-dialog">
                                       <div class="modal-content">
                                              <div class="modal-body">
                  <img  src="images/bicyles/b7.jpg" class="img-responsive" style="width:450px; margin:0 auto !important; ">
                    <p style="width: 100%; text-align: center; padding:30px !important;" class="modal-text">All-new WSD frame geometry puts you in a position of power with a faster, more stable ride. Ride smoother, ride longer, ride faster.</p>
                     </div>
                     </div>
                     </div>
                    </div>
                            <p  class="card-text"><b style="color:#ff3333;">Price: </b><b>AED 40/ 1hr</b></p>
                                    <a href="BookNow.php?2=true" class="btn btn-success btn-block" id="222">Add to cart</a>
                        </div>
                    </div>
                </div>








                <div style="padding: 30px;" class="col-12 col-md-6 col-lg-4">
                    <div style="height: 350px; width:300px; " class="card">
                        <img style="height: 200px; width: 230px; margin:0 auto; padding-top:30px; " class="card-img-top" src="images/bicyles/b3.jpg" alt="Card image cap">
                        <div  class="card-body">
                            <h6 class="card-title"><a href="#myModal2" data-toggle="modal">View Bike</a></h6>
                      <div style="padding-top: 40px; width:100%; " id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div  class="modal-dialog">
                                       <div class="modal-content">
                                              <div class="modal-body">
                  <img  src="images/bicyles/b3.jpg" class="img-responsive" style="width:450px; margin:0 auto !important; ">
                    <p style="width: 100%; text-align: center; padding:30px !important;" class="modal-text">All-new WSD frame geometry puts you in a position of power with a faster, more stable ride. Ride smoother, ride longer, ride faster.</p>
                     </div>
                     </div>
                     </div>
                    </div>
                            <p  class="card-text"><b style="color:#ff3333;">Price: </b><b>AED 40/ 1hr</b></p>
                                    <a href="BookNow.php?3=true" class="btn btn-success btn-block" id="333">Add to cart</a>
                        </div>
                    </div>
                </div>






                <div style="padding: 30px;" class="col-12 col-md-6 col-lg-4">
                    <div style="height: 350px; width:300px; " class="card">
                        <img style="height: 200px; width: 230px; margin:0 auto; padding-top:30px; " class="card-img-top" src="images/bicyles/b5.jpg" alt="Card image cap">
                        <div  class="card-body">
                            <h6 class="card-title"><a href="#myModa3" data-toggle="modal">View Bike</a></h6>
                      <div style="padding-top: 30px; width:100%; " id="myModa3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div  class="modal-dialog">
                                       <div class="modal-content">
                                              <div class="modal-body">
                  <img  src="images/bicyles/b5.jpg" class="img-responsive" style="width:450px; margin:0 auto !important; ">
                    <p style="width: 100%; text-align: center; padding:30px !important;" class="modal-text">All-new WSD frame geometry puts you in a position of power with a faster, more stable ride. Ride smoother, ride longer, ride faster.</p>
                     </div>
                     </div>
                     </div>
                    </div>
                            <p  class="card-text"><b style="color:#ff3333;">Price: </b><b>AED 35/ 1hr</b></p>
                                    <a href="BookNow.php?4=true" class="btn btn-success btn-block">Add to cart</a>
                        </div>
                    </div>
                </div>


                <div style="padding: 30px;" class="col-12 col-md-6 col-lg-4">
                    <div style="height: 350px; width:300px; " class="card">
                        <img style="height: 200px; width: 230px; margin:0 auto; padding-top:30px; " class="card-img-top" src="images/bicyles/b10.jpg" alt="Card image cap">
                        <div  class="card-body">
                            <h6 class="card-title"><a href="#myModal4" data-toggle="modal">View Bike</a></h6>
                      <div style="padding-top: 70px; width:100%; " id="myModal4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div  class="modal-dialog">
                                       <div class="modal-content">
                                              <div class="modal-body">
                  <img  src="images/bicyles/b10.jpg" class="img-responsive" style="width:450px; margin:0 auto !important; ">
                    <p style="width: 100%; text-align: center; padding:30px !important;" class="modal-text">All-new WSD frame geometry puts you in a position of power with a faster, more stable ride. Ride smoother, ride longer, ride faster.</p>
                     </div>
                     </div>
                     </div>
                    </div>
                            <p  class="card-text"><b style="color:#ff3333;">Price: </b><b>AED 45/ 1hr</b></p>
                                    <a href="BookNow.php?5=true" class="btn btn-success btn-block">Add to cart</a>
                        </div>
                    </div>
                </div>


                <div style="padding: 30px;" class="col-12 col-md-6 col-lg-4">
                    <div style="height: 350px; width:300px; " class="card">
                        <img style="height: 200px; width: 230px; margin:0 auto; padding-top:30px; " class="card-img-top" src="images/bicyles/b12.png" alt="Card image cap">
                        <div  class="card-body">
                            <h6 class="card-title"><a href="#myModal5" data-toggle="modal">View Bike</a></h6>
                      <div style="padding-top: 30px; width:100%; " id="myModal5" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div  class="modal-dialog">
                                       <div class="modal-content">
                                              <div class="modal-body">
                  <img  src="images/bicyles/b12.png" class="img-responsive" style="width:450px; margin:0 auto !important; ">
                    <p style="width: 100%; text-align: center;" class="modal-text">All-new WSD frame geometry puts you in a position of power with a faster, more stable ride. Ride smoother, ride longer, ride faster.</p>
                     </div>
                     </div>
                     </div>
                    </div>
                            <p  class="card-text"><b style="color:#ff3333;">Price: </b><b>AED 30/ 1hr</b></p>
                                    <a href="BookNow.php?6=true" class="btn btn-success btn-block">Add to cart</a>
                        </div>
                    </div>
                </div>


                <div style="padding: 30px;" class="col-12 col-md-6 col-lg-4">
                    <div style="height: 350px; width:300px; " class="card">
                        <img style="height: 200px; width: 230px; margin:0 auto; padding-top:30px; " class="card-img-top" src="images/bicyles/b15.jpg" alt="Card image cap">
                        <div  class="card-body">
                            <h6 class="card-title"><a href="#myModal6" data-toggle="modal">View Bike</a></h6>
                      <div style="padding-top: 70px; width:100%; " id="myModal6" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div  class="modal-dialog">
                                       <div class="modal-content">
                                              <div class="modal-body">
                  <img  src="images/bicyles/b15.jpg" class="img-responsive" style="width:450px; margin:0 auto !important; ">
                    <p style="width: 100%; text-align: center; padding:30px !important;" class="modal-text">All-new WSD frame geometry puts you in a position of power with a faster, more stable ride. Ride smoother, ride longer, ride faster.</p>
                     </div>
                     </div>
                     </div>
                    </div>
                            <p  class="card-text"><b style="color:#ff3333;">Price: </b><b>AED 45/ 1hr</b></p>
                                    <a href="BookNow.php?7=true" class="btn btn-success btn-block">Add to cart</a>
                        </div>
                    </div>
                </div>

                                <div style="padding: 30px;" class="col-12 col-md-6 col-lg-4">
                    <div style="height: 350px; width:300px; " class="card">
                        <img style="height: 200px; width: 230px; margin:0 auto; padding-top:30px; " class="card-img-top" src="images/bicyles/b16.jpg" alt="Card image cap">
                        <div  class="card-body">
                            <h6 class="card-title"><a href="#myModal7" data-toggle="modal">View Bike</a></h6>
                      <div style="padding-top: 50px; width:100%; " id="myModal7" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div  class="modal-dialog">
                                       <div class="modal-content">
                                              <div class="modal-body">
                  <img  src="images/bicyles/b16.jpg" class="img-responsive" style="width:450px; margin:0 auto !important; ">
                    <p style="width: 100%; text-align: center; padding:30px !important;" class="modal-text">All-new WSD frame geometry puts you in a position of power with a faster, more stable ride. Ride smoother, ride longer, ride faster.</p>
                     </div>
                     </div>
                     </div>
                    </div>
                            <p  class="card-text"><b style="color:#ff3333;">Price: </b><b>AED 25/ 1hr</b></p>
                                    <a href="BookNow.php?8=true" class="btn btn-success btn-block">Add to cart</a>
                        </div>
                    </div>
                </div>


                                <div style="padding: 30px;" class="col-12 col-md-6 col-lg-4">
                    <div style="height: 350px; width:300px; " class="card">
                        <img style="height: 200px; width: 230px; margin:0 auto; padding-top:30px; " class="card-img-top" src="images/bicyles/b17.jpg" alt="Card image cap">
                        <div  class="card-body">
                            <h6 class="card-title"><a href="#myModal8" data-toggle="modal">View Bike</a></h6>
                      <div style="padding-top: 70px; width:100%; " id="myModal8" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div  class="modal-dialog">
                                       <div class="modal-content">
                                              <div class="modal-body">
                  <img  src="images/bicyles/b17.jpg" class="img-responsive" style="width:450px; margin:0 auto !important; ">
                    <p style="width: 100%; text-align: center; padding:30px !important;" class="modal-text">All-new WSD frame geometry puts you in a position of power with a faster, more stable ride. Ride smoother, ride longer, ride faster.</p>
                     </div>
                     </div>
                     </div>
                    </div>
                            <p  class="card-text"><b style="color:#ff3333;">Price: </b><b>AED 40/ 1hr</b></p>
                                    <a href="BookNow.php?9=true" class="btn btn-success btn-block">Add to cart</a>
                        </div>
                    </div>
                </div>


                <div style="padding: 30px;" class="col-12 col-md-6 col-lg-4">
                    <div style="height: 350px; width:300px; " class="card">
                        <img style="height: 200px; width: 230px; margin:0 auto; padding-top:30px; " class="card-img-top" src="images/bicyles/b18.jpg" alt="Card image cap">
                        <div  class="card-body">
                            <h6 class="card-title"><a href="#myModal9" data-toggle="modal">View Bike</a></h6>
                      <div style="padding-top: 40px; width:100%; " id="myModal9" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div  class="modal-dialog">
                                       <div class="modal-content">
                                              <div class="modal-body">
                  <img  src="images/bicyles/b18.jpg" class="img-responsive" style="width:450px; height:300px ; margin:0 auto !important; ">
                    <p style="width: 100%; text-align: center; padding:30px !important;" class="modal-text">All-new WSD frame geometry puts you in a position of power with a faster, more stable ride. Ride smoother, ride longer, ride faster.</p>
                     </div>
                     </div>
                     </div>
                    </div>
                            <p  class="card-text"><b style="color:#ff3333;padding:15px;">Price:</b><b>AED 50/ 1hr</b></p>
                                    <a href="BookNow.php?10=true" class="btn btn-success btn-block">Add to cart</a>
                        </div>
                    </div>
                </div>


                                <div style="padding: 30px;" class="col-12 col-md-6 col-lg-4">
                    <div style="height: 350px; width:300px; " class="card">
                        <img style="height: 200px; width: 230px; margin:0 auto; padding-top:30px; " class="card-img-top" src="images/bicyles/b19.jpg" alt="Card image cap">
                        <div  class="card-body">
                            <h6 class="card-title"><a href="#myModal10" data-toggle="modal">View Bike</a></h6>
                      <div style="padding-top: 20px; width:100%; " id="myModal10" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div  class="modal-dialog">
                                       <div class="modal-content">
                                              <div class="modal-body">
                  <img  src="images/bicyles/b19.jpg" class="img-responsive" style="width:450px; margin:0 auto !important; ">
                    <p style="width: 100%; text-align: center; padding:30px !important;" class="modal-text">All-new WSD frame geometry puts you in a position of power with a faster, more stable ride. Ride smoother, ride longer, ride faster.</p>
                     </div>
                     </div>
                     </div>
                    </div>
                            <p  class="card-text"><b style="color:#ff3333;">Price: </b><b>AED 35/ 1hr</b></p>
                          <!---  <div class="row"> -->
                           <!--     <div class="col"> -->
                                    <a href="BookNow.php?11=true" class="btn btn-success btn-block">Add to cart</a>
                             <!--   </div> -->
                       <!--     </div>  --->
                        </div>
                    </div>
                </div>
                                <div style="padding: 30px;" class="col-12 col-md-6 col-lg-4">
                    <div style="height: 350px; width:300px; " class="card">
                        <img style="height: 200px; width: 230px; margin:0 auto; padding-top:30px; " class="card-img-top" src="images/bicyles/b20.jpg" alt="Card image cap">
                        <div  class="card-body">
                           <h6 class="card-title"><a href="#myModal11" data-toggle="modal">View Bike</a></h6>
                      <div style="padding-top: 30px; width:100%; " id="myModal11" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div  class="modal-dialog">
                                       <div class="modal-content">
                                              <div class="modal-body">
                  <img  src="images/bicyles/b20.jpg" class="img-responsive" style="width:450px; margin:0 auto !important; ">
                    <p style="width: 100%; text-align: center; padding:30px !important;" class="modal-text">All-new WSD frame geometry puts you in a position of power with a faster, more stable ride. Ride smoother, ride longer, ride faster.</p>
                     </div>
                     </div>
                     </div>
                    </div>
                            <p  class="card-text"><b style="color:#ff3333;">Price: </b><b>AED 45/ 1hr</b></p>

                                    <a href="BookNow.php?12=true" class="btn btn-success btn-block">Add to cart</a>
  
                        </div>
                    </div>
                </div>







<a href="Checkout.php" class="btn btn-success btn-block" id="checkout">Proceed to Checkout</a>

<!--
 <a href="#" class="btn btn-success btn-block" id="checkout" onclick="doSomething();">Test</a>
  -->







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

<footer style="padding-top: 40px;" class="page-footer">

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright CycleTech
    </div>
    <!-- Copyright -->

  </footer>




</html>