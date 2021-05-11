<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$Email = $Password = $confirm_Password = "";
$Email_err = $Password_err = $confirm_Password_err = "";
$PhoneNumber = $Address = $FName = $LName = "";
$PhoneNumber_err = $Address_err = $FName_err = $LName_err = $error_message = "";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["Email"]))){
        $Email_err = "Please enter your email address.";

    } else{
        // Prepare a select statement
        $sql = "SELECT IdClient FROM member WHERE Email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_Email);
            
            // Set parameters
            $param_Email = trim($_POST["Email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $Email_err = "This email address exists already.";
                } else{
                    $Email = trim($_POST["Email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
//mysqli_close($link);

    
    // Validate password
    if(empty(trim($_POST['Password']))){
        $Password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['Password'])) < 3){
        $Password_err = "Password must have atleast 3 characters.";
    } else{
        $Password = trim($_POST['Password']);
    }

    if(empty(trim($_POST['PhoneNumber']))){
        $PhoneNumber_err = "Please enter your phone number.";     
    } else{
        $PhoneNumber = trim($_POST['PhoneNumber']);
    }
 

    if(empty(trim($_POST['FName']))){
        $FName_err = "Please enter your name.";     
    } else{
        $FName = trim($_POST['FName']);
    }

    if(empty(trim($_POST['LName']))){
        $LName_err = "Please enter your name.";     
    } else{
        $LName = trim($_POST['LName']);
    }


    if(empty(trim($_POST['Address']))){
        $Address_err = "Please enter your address.";     
    } else{
        $Address = trim($_POST['Address']);
    }
   
if(!empty($_POST["register-user"])) {
    /* Form Required Field Validation */
    foreach($_POST as $key=>$value) {
        if(empty($_POST[$key])) {
        $error_message = "All Fields are required";
        break;
        }
    } }
    /* Password Matching Validation */
    if($_POST['Password'] != $_POST['CPassword']){ 
    $error_message = 'Passwords should be same<br>'; 
    }



    /* Email Validation */
    //if(!isset($error_message)) {
       // if (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
        //$error_message = "Invalid Email Address";
      //  }
   // }


    // Check input errors before inserting in database
    if(empty($FName_err) && empty($LName_err) && empty($Email_err) && empty($PhoneNumber_err) && empty($Address_err)  && empty($Password_err) && empty($confirm_Password_err) && empty($error_message) ){
        $_POST= array();
        // Prepare an insert statement
        $sql = "INSERT INTO member (FName, LName, Email, PhoneNumber, Address, Password) VALUES (?, ?, ?, ?, ?, ?)";
        $sq = "INSERT INTO users (Email, Password) VALUES (?, ?)";
         
        if(($stmt = mysqli_prepare($link, $sql)) && ($stm = mysqli_prepare($link, $sq))) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_FName, $param_LName, $param_Email, $param_PhoneNumber, $param_Address, $param_Password);
            mysqli_stmt_bind_param($stm, "ss", $param_FName, $param_Password);
            // Set parameters
            $param_FName = $FName;
            $param_LName = $LName;
            $param_Email = $Email;
            $param_PhoneNumber = $PhoneNumber;
            $param_Address = $Address;
            $param_Password = password_hash($Password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if((mysqli_stmt_execute($stmt))  && (mysqli_stmt_execute($stm))) {
                // Redirect to login page
            $success_message = "You have registered successfully! Click the link below to login"; 
            } else{
               $error_message = "Problem in registration. Try Again!";
            }  
           
    }
    
    //close statement
      mysqli_stmt_close($stmt);
      mysqli_stmt_close($stm);
      
}
    // Close connection
    mysqli_close($link);
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="Stylesheet.css" />
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>
<style>
        body{ 
            font: 14px sans-serif;
            background: linear-gradient(rgba(0, 50, 0, 0.5),rgba(0, 50, 0, 0.5)), url(login1.jpg);
            background-size: cover;
            background-position: center;
         }
        .wrapper{ width: 700px; padding: 40px; }


.error-message {
    padding: 7px 10px;
    background: #fff1f2;
    border: #ffd5da 1px solid;
    color: #d6001c;
    border-radius: 4px;
}
.success-message {
    padding: 7px 10px;
    background: #cae0c4;
    border: #c3d0b5 1px solid;
    color: #027506;


  </style>

<body>
    <div class="wrapper" style="margin: 50px auto;  background:#fff">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account or login <a href="login.php">here</a></p>
        <form name="frmRegistration" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">



                 <?php if(!empty($success_message)) { ?> 
                 <div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
                       <?php } ?>
                        <?php if(!empty($error_message)) { ?>   
                           <div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
                             <?php } ?>


            <div class="form-group <?php  echo (!empty($FName_err)) ? 'has-error' : ''; ?>">
                <label>First Name</label>
                <input type="text" name="FName"class="form-control" value="<?php if(isset($_POST['FName'])) echo $FName; ?>">
                <span class="help-block"><?php echo $FName_err; ?></span>
            </div>    

            <div class="form-group <?php  echo (!empty($LName_err)) ? 'has-error' : ''; ?>">
                <label>Last Name</label>
                <input type="text" name="LName"class="form-control" value="<?php if(isset($_POST['LName'])) echo $LName; ?>">
                <span class="help-block"><?php echo $LName_err; ?></span>
            </div> 


            <div class="form-group <?php echo (!empty($Email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="Email"class="form-control" value="<?php if(isset($_POST['Email'])) echo $Email; ?>">
                <span class="help-block"><?php echo $Email_err; ?></span>
            </div> 

            <div class="form-group <?php echo (!empty($PhoneNumber_err)) ? 'has-error' : ''; ?>">
                <label>PhoneNumber</label>
                <input type="text" name="PhoneNumber"class="form-control" value="<?php if(isset($_POST['PhoneNumber'])) echo $PhoneNumber; ?>">
                <span class="help-block"><?php echo $PhoneNumber_err; ?></span>
            </div> 

            <div class="form-group <?php echo (!empty($Address_err)) ? 'has-error' : ''; ?>">
                <label>Address</label>
                <input type="text" name="Address"class="form-control" value="<?php if(isset($_POST['Address'])) echo $Address; ?>">
                <span class="help-block"><?php echo $Address_err; ?></span>
            </div> 

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password:</label>
                <input type="password" name="Password" class="form-control">
                <span class="help-block"><?php echo $Password_err; ?></span>
            </div>
           <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="CPassword" class="form-control" value="">
            </div>
            <div class="form-group">
        <!--    <input type="checkbox" name="terms"> I accept Terms and Conditions> --->
             <input type="submit" name="register-user" value="Register"  class="btn btn-success">
            </div>
           <br> <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>   

 





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>









</body></html>