
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
   <title>Contact Us</title>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" type="text/css" href="Stylesheet.css" />
  <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    

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
            <ul class="navbar-nav navbar-right mr-auto ">
               <li class="nav-item">
          <a class="nav-link" href="Index.php">Home</a>
        </li>
                <li class="nav-item"><a class="nav-link" href="AboutUs.php">About Us</a></li>

                <li class="nav-item"><a class="nav-link" href="BookNow.php">Book Now</a></li>

                 <li class="nav-item"><a class="nav-link" href="Locations.php">Our Locations</a></li>
                <li class="nav-item active"><a class="nav-link" href="ContactUs.php">Contact Us<span class="sr-only">(current)</span></a></li>
                </ul>



<ul  class="nav navbar-nav ">
        <li class="nav-item dropdown">
<a style="color:#35b729;" class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button" aria-haspopup="true" aria-expanded="false">
Welcome, <?php echo htmlspecialchars($_SESSION["Email"]);?> 
</a>
<div style="background-color:#f2f2f2;" class="dropdown-menu" aria-labelledby="Preview">
<!---<a style="color:#8c8c8c;" class="dropdown-item" href="#">Update Info</a>
<a style="color:#8c8c8c;" class="dropdown-item" href="">Report bike</a>
<a style="color:#8c8c8c;" class="dropdown-item" href="reset-password.php">Reset Password</a> -->
<a style="color:#8c8c8c;" class="dropdown-item" href="logout.php">Sign Out</a>
</div>
</li>
            
            </ul>
        </div>
    </nav>


     <section style="padding:30px; padding-top: 105px!important;" id="contact">
       <div class="container">
           <h3 class="text-center text-uppercase">Contact us</h3>
           <!--<p class="text-center w-75 m-auto"></p> -->
           <div class="row">
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">call us</h4>
                    <p>+8801683615582, +8801750603409</p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Headquarters</h4>
                   <address>Heriot-Watt University, Dubai Campus, Academic city. </address>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-envelope fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Email</h4>
                    <address>cycletechservices@gmail.com </address>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-twitter fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Twitter</h4>
                    <p>@cycletech</p>
                  </div>
                </div>
             </div>
           </div>
       </div>
    </section>

        <h3 class="text-center">Have a complaint or a suggestion</h3>
    <div class="col text-center mt-5 mb-5">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Press here</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Complaints and suggestions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label text-left">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
              <label for="recipient-name" class="col-form-label text-left">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
          <div class="form-group">
            <label for="complaint" class="col-form-label text-left">Message</label>
            <textarea class="form-control" name="complaint" rows="5"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Send message</button>
      </div>
    </div>
    </form>
  </div>
</div>
    </div>
<?php
if(isset($_POST["submit"])){
$hostname='localhost';
$username='root';
$password='';

try {
$dbh = new PDO("mysql:host=$hostname;dbname=cycletech",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO complaints (name, email, complaint)
VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["complaint"]."')";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('You will be contacted shortly');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('not successful');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>


    <h3 class="text-center text-uppercase">FAQs</h3>

<div class="container py-3">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="accordion" id="faqExample">
                <div class="card">
                    <div class="card-header p-2" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Q: What is the CycleTech bike like?

                            </button>
                          </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b> Cycles have tons of cool features, incuding auto-generated front and back lights, a built-in lock and key, and automatic gear shift.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header p-2" id="headingTwo">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Q: Can you pay with cash?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                        <div class="card-body">
                            Currently, CycleTech does not accept cash payments. (We???re working on it. Stay tuned.)
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Q. How do I know if my Bicycle was returned properly?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                            When returning your Bicycle, make sure you push the bike all the way into an open dock. Try giving your bike a tug to see if it comes back out. Make sure to opt-in to text messages???you'll receive a text, email and an app notification every time your bicycle is properly docked!
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header p-2" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseF">
                              Q. Can I reserve a Bicycle ahead of time?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                        <div class="card-body">
                            Bike sharing is a public transit option???therefore, we cannot allow reserved bikes. However, if you are part of an organization that would like to reserve a group of bikes for a special event, please reach out to info@cycltech.com for pricing info.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header p-2" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Q. When are the stations open?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqExample">
                        <div class="card-body">
                            You can check out bikes from our stations 24 hours and 365 days. All the people don???t sleep and so do we.
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header p-2" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              Q. How can I see a map of stations on-the-go?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqExample">
                        <div class="card-body">
                            Download theCycleTech mobile app. If you???re a member, you???ll also be able to use the app to check out bikes while you???re at a station.
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header p-2" id="headingSeven">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              Q. How can I see a map of stations on-the-go?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#faqExample">
                        <div class="card-body">
                            Contact Customer Service immediately at (800) 19153. You are financially responsible for any and all bikes checked out of a station on your card. If the bike you checked out is not recovered, you will be responsible for the replacement cost, 750AED.
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header p-2" id="headingEight">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                              Q. What if I am involved in an accident?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#faqExample">
                        <div class="card-body">
                            If there has been an injury, please dial 999 first. If appropriate, contact the police as well. As in any accident, exchange information with any other affected party and collect contact information from witnesses. Then, contact Customer Service at (800) 19153 the earliest appropriate time.
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header p-2" id="headingNine">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                              Q. What if I get a flat tire?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#faqExample">
                        <div class="card-body">
                            Please return a bike with a flat tire to the nearest CycleTech-station. Contact Customer Service (800) 19153 at the earliest convenience to alert them to the maintenance issue so we can lock down the bike for repair. If you cannot get the bike to a station, you must properly secure the bike with the built-in lock and contact Customer Service immediately via phone or email (info@cycletech.com) to let them know. Another option of reporting is contacting us through the app.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header p-2" id="heading10">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                              Q. I signed up online, can I use the service right away?
                            </button>
                          </h5>
                    </div>
                    <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#faqExample">
                        <div class="card-body">
                            Yes! Download CycleTech app, login into the system, and start riding right away. 
                        </div>
                    </div>
                </div>










            </div>

        </div>
    </div>
    <!--/row-->
</div>
<!--container-->
 

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>






        
</body>


<footer style="padding-top: 40px;" class="page-footer bottom">

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">?? 2019 Copyright CycleTech
    </div>
    <!-- Copyright -->

  </footer>

</html>




  
