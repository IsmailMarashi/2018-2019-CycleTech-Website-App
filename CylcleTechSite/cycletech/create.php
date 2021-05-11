<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$Make = $Model = $Color = $Terminal = $Status  = $Lat = $Lng = $Price ="";
$Make_err = $Model_err = $Color_err = $Terminal_err = $Status_err = $Lat_err = $Lng_err = $Price_err ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_Make = trim($_POST["Make"]);
    if(empty($input_Make)){
        $Make_err = "Please enter a Make.";
    } elseif(!filter_var($input_Make, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $Make_err = "Please enter a valid Make.";
    } else{
        $Make = $input_Make;
    }
    
    // Validate address
    $input_Model = trim($_POST["Model"]);
    if(empty($input_Model)){
        $Model_err = "Please enter Model.";     
    } else{
        $Model = $input_Model;
    }

    $input_Color = trim($_POST["Color"]);
    if(empty($input_Color)){
        $Color_err = "Please enter Color.";     
    } else{
        $Color = $input_Color;
    }

    $input_Terminal = trim($_POST["Terminal"]);
    if(empty($input_Terminal)){
        $Terminal_err = "Please enter Terminal.";     
    } else{
        $Terminal = $input_Terminal;
    }
    
    $input_Status = trim($_POST["Status"]);
    if(empty($input_Status)){
        $Status_err = "Please enter Status.";     
    } else{
        $Status = $input_Status;
    }

    $input_Lat = trim($_POST["Lat"]);
    if(empty($input_Lat)){
        $Lat_err = "Please enter Lat.";     
    } else{
        $Lat = $input_Lat;
    }

        $input_Lng = trim($_POST["Lng"]);
    if(empty($input_Lng)){
        $Lng_err = "Please enter Lng.";     
    } else{
        $Lng = $input_Lng;
    }

    // Validate salary
    $input_Price = trim($_POST["Price"]);
    if(empty($input_Price)){
       $Price_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_Price)){
       $Price_err = "Please enter a positive integer value.";
    } else{
     $Price = $input_Price;
    }
    
    // Check input errors before inserting in database
    if(empty($Make_err) && empty($Model_err) && empty($Color_err) && empty($Terminal_err) && empty($Status_err) && empty($Lat_err) && empty($Lng_err) && empty($Price_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO bicycle (Make, Model, Color, Terminal, Status, Lat, Lng, Price) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssss", $param_Make, $param_Model, $param_Color, $param_Terminal, $param_Status, $param_Lat, $param_Lng, $param_Price);
            
            // Set parameters
            $param_Make = $Make;
            $param_Model = $Model;
            $param_Color =$Color;
            $param_Terminal = $Terminal;
            $param_Status = $Status;
            $param_Lat = $Lat;
            $param_Lng = $Lng;
            $param_Price = $Price;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index1.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
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
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">

        .wrapper{
            width: 600px;
            margin: 0 auto;
            background-color: white!important;
        }
    </style>
</head>
<body style="padding: 30px; padding-top: 70px; padding-left: 70px;   background-color:#f5f5f0; ">
    <a style="width:8%; font-size: 15px;" href="index1.php" class="btn btn-success"> >> Back</a>
    <div style="padding: 30px;" class="wrapper">
        <div class="container-fluid bg-light">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="page-header">
                        <h2 style="text-align: center;">Create Record</h2>


                    </div>
                    <p>Please fill this form and submit to add bicycle record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($Make_err)) ? 'has-error' : ''; ?>">
                            <label>Make</label>
                            <input type="text" name="Make" class="form-control" value="<?php echo $Make; ?>">
                            <span class="help-block"><?php echo $Make_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($Model_err)) ? 'has-error' : ''; ?>">
                            <label>Model</label>
                            <input type="text" name="Model" class="form-control" value="<?php echo $Model; ?>">
                            <span class="help-block"><?php echo $Model_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($Color_err)) ? 'has-error' : ''; ?>">
                            <label>Color</label>
                            <input type="text" name="Color" class="form-control" value="<?php echo $Color; ?>">
                            <span class="help-block"><?php echo $Color_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($Terminal_err)) ? 'has-error' : ''; ?>">
                            <label>Terminal</label>
                            <input type="text" name="Terminal" class="form-control" value="<?php echo $Terminal; ?>">
                            <span class="help-block"><?php echo $Terminal_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($Status_err)) ? 'has-error' : ''; ?>">
                            <label>Status</label>
                            <input type="text" name="Status" class="form-control" value="<?php echo $Status; ?>">
                            <span class="help-block"><?php echo $Status_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($Lat_err)) ? 'has-error' : ''; ?>">
                            <label>Lat</label>
                            <input type="text" name="Lat" class="form-control" value="<?php echo $Lat; ?>">
                            <span class="help-block"><?php echo $Lat_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($Lng_err)) ? 'has-error' : ''; ?>">
                            <label>Lng</label>
                            <input type="text" name="Lng" class="form-control" value="<?php echo $Lng; ?>">
                            <span class="help-block"><?php echo $Lng_err;?></span>
                        </div>

                       <div class="form-group <?php echo (!empty($Price_err)) ? 'has-error' : ''; ?>">
                            <label>Price</label>
                            <input type="text" name="Price" class="form-control" value="<?php echo $Price; ?>">
                            <span class="help-block"><?php echo $Price_err;?></span>
                        </div> 
                        <input type="submit" class="btn btn-success" value="Submit">
                        <a href="index1.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>

<footer class="page-footer bottom">

    <!-- Copyright -->
    <div  class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright CycleTech
    </div>
    <!-- Copyright -->

  </footer>
</html>