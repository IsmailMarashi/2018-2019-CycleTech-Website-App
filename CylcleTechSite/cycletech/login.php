<?php

session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
 

 if($_SESSION["Email"] == 'admin')  {                            
        header("location: Admin.php");
                 }
                            else {
        header("location: Index.php");
                            }


  exit;
}
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$Email = $Password = "";
$Email_err = $Password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["Email"]))){
        $Email_err = 'Please enter Email.';
    } else{
        $Email = trim($_POST["Email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['Password']))){
        $Password_err = 'Please enter your password.';
    } else{
        $Password = trim($_POST['Password']);
        //$hash = password_hash($Password, PASSWORD_DEFAULT); //TRY
   // $Password = password_hash(trim($_POST['Password']), PASSWORD_DEFAULT);
    }
    
    // Validate credentials
    if(empty($Email_err) && empty($Password_err)){
        // Prepare a select statement
        $sql = "SELECT Email, Password FROM users WHERE Email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_Email);
            
            // Set parameters
            $param_Email = $Email;
           // $param_Password = password_hash($Password, PASSWORD_DEFAULT);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
             
                 mysqli_stmt_bind_result($stmt, $Email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                    // $hashed_Password = password_hash($Password, PASSWORD_DEFAULT); //line that makes it all happen
               

                        if(password_verify($Password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */

                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["Email"] = $Email;   
                           // $_SESSION["Type"] = $Type;
                            if($Email == 'admin')  {                            
                                 header("location: Admin.php");
                                                       }

                            else {
                                header("location: Index.php");
                            }




                        } else{
                            // Display an error message if password is not valid
                            $Password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $Email_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}


?>
 
<!DOCTYPE html>
<html lang="en">
<head>

<title>Login</title>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" type="text/css" href="Stylesheet.css" />
  <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous" />

</head>
<style>
        body{ 
            font: 14px sans-serif;
            background: linear-gradient(rgba(0, 50, 0, 0.5),rgba(0, 50, 0, 0.5)), url(login1.jpg);
            background-size: cover;
            background-position: center;
         }
        .wrapper{ width: 400px; padding: 40px; }

    .nav-item a:hover {
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
            <ul class="navbar-nav navbar-right mr-auto ">
               <li class="nav-item">
          <a class="nav-link" href="Index.html">Home</a>
        </li>
                <li class="nav-item"><a class="nav-link" href="AboutUs.html">About Us</a></li>

               
                <li class="nav-item"><a class="nav-link" href="BookNow.html">Book Now</a></li>

                 <li class="nav-item"><a class="nav-link" href="Locations.html">Our Locations</a></li>
                <li class="nav-item"><a class="nav-link" href="ContactUs.html">Contact Us</a></li>
            </ul>
                   
              <ul class="navbar-nav">
                 <li class="nav-item active"><a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a></li>
              </ul>

        </div>
    </nav>            



                  
  



    <div class="wrapper" style="margin: 120px auto;  background:#fff;">
        <h2 style="padding-top: 20px;">Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group <?php echo (!empty($Email_err)) ? 'has-error' : ''; ?>">
                <label>Name</label>
                <input type="text" name="Email"class="form-control" value="<?php echo $Email; ?>">
                <span class="help-block"><?php echo $Email_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($Email_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="Password" class="form-control">
                <span class="help-block"><?php echo $Password_err; ?></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php"><b>Sign up now</b></a>.</p>
        </form>
    </div>  


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