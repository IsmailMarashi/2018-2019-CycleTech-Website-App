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
  <title>Admin</title>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" type="text/css" href="Stylesheet.css" />
  <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>


</head>





<body>

<!---<h1 style="">Welcome, <?php // echo htmlspecialchars($_SESSION["Email"]);?><h1> -->
<!--<button><a style="color:#8c8c8c;" href="logout.php">Sign Out</a></button>--->


<div class="header">
  <h1>Welcome, <?php echo htmlspecialchars($_SESSION["Email"]);?></h1>
 </div>

<div class="topnav">
  <a href="views.php">Bike Records</a>
<a href="index1.php">Add, Delete or Update Bikes</a>

  <!--<a href="#">Link</a> -->
  <a href="logout.php" style="float:right">Logout</a>
</div>

<div class="row">
  <div style="height: 500px;" class="leftcolumn">
    <div style="height: 500px;" class="card">
    <!---  <h2 style="text-align: center;">CYCLES IN A WEEK</h2>--->
     <!--- <h5>Title description, Dec 7, 2017</h5> -->
     <!---<div style="height:200px;"> -->
      	
      <img style="height:450px; width:100%;" src="images/charts/bg2.png"alt="Cycle used in a Week">



     <!--- </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et do
      lore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p> -->
    </div>
    </div>

  <div class="rightcolumn">
    <div class="card">
      <h2 style="text-align:center; font-size:18px; "><b>CUSTOMERS' COMPLAINTS</b></h2>
      <div  style="height:100px;">
        <img style="height: 100px; width:100%;"  src="customerservice.jpg" alt="customerservice">
      </div>
      <a style="text-align: center; padding-top: 15px;" href="complaints.php">View</a>
    </div>
  <div class="card">
      <h2 style="text-align:center; font-size:18px; "><b>TERMINALS INFO</b></h2>
      <div  style="height:130px;">
        <img style="height: 120px; width:100%; padding-bottom:15px; "  src="location.jpg" alt="locations">
        <a style="padding-left:100px;" href="terminals.php">View</a>
      </div>
 
    </div>
 <!--   <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div> -->
  </div>
</div>











    <div style="padding-top: 100px; padding-left: 30px;"  class="row">
    <div style="height: 500px;" class="col-sm-6">
    <div style="height: 500px; " class="card">

   <img style="height:400px; width:100%;" src="images/charts/pc2.png"alt="First slide">

  </div>
</div>

    <div style="height: 500px;" class="col-sm-6">
    <div style="height: 500px;" class="card">
      <!--  <p> jkjkdjfhbjb bjhfdhjj bhjk bhfdyg hfjhdbj fdhjjfdofd bdsfnihdsfbd ffdsojgf hdsnnfh cbffh fhfnf fgfgdfuiifdskjj hsd</p> -->
   <img style="height:400px; width:100%;" src="images/charts/pc1.jpg"alt="First slide"> 

  </div>
</div>


</div>









	
<div style="height: 500px; padding-top: 70px;" >

    <div style="height: 600px; width: 90%; margin:0 auto;" class="card">
      <h2 style="text-align:center;"><b>AVAILABLE BIKES</b></h2>
      	
      <img style="height:450px; width:100%;" src="images/charts/bg1.png"alt="Cycle used in a Week">
    </div>
    </div>




      	
      <img style="height:800px; width:100%; margin:0 auto; padding:100px; padding-top:250px !important; " src="images/charts/graph.png"alt="Cycle used in a Week">



     <!--- </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et do
      lore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p> -->










<footer class="page-footer bottom">

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright CycleTech
    </div>
    <!-- Copyright -->

  </footer>





















    </body>


    </html>