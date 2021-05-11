<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$Name = $MaxStorageCapacity = $Lat = $Lng = "";
$Name_err = $MaxStorageCapacity_err = $Lat_err = $Lng_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    
    // Validate address
    $input_Name = trim($_POST["Name"]);
    if(empty($input_Name)){
        $Name_err = "Please enter Name.";     
    } else{
        $Name = $input_Name;
    }

    $input_MaxStorageCapacity = trim($_POST["MaxStorageCapacity"]);
    if(empty($input_MaxStorageCapacity)){
        $Color_err = "Please enter MaxStorageCapacity.";     
    } else{
        $MaxStorageCapacity = $input_MaxStorageCapacity;
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
   // $input_Price = trim($_POST["Price"]);
    //if(empty($input_Price)){
      //  $Price_err = "Please enter the salary amount.";     
   // } elseif(!ctype_digit($input_Price)){
     //   $Price_err = "Please enter a positive integer value.";
   // } else{
//$Price = $input_Price;
   // }
    
    // Check input errors before inserting in database
    if(empty($Name_err) && empty($MaxStorageCapacity_err) && empty($Lat_err) && empty($Lng_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO terminal (Name, MaxStorageCapacity, Lat, Lng) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_Name, $param_MaxStorageCapacity, $param_Lat, $param_Lng);
            
            // Set parameters
            $param_Name = $Name;
            $param_MaxStorageCapacity = $MaxStorageCapacity;
            $param_Lat = $Lat;
            $param_Lng = $Lng;
          //  $param_Price = $Price;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: terminals.php");
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
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
    body{

      
        padding: 30px;
        background-color:#f5f5f0;
    }
        .wrapper{
            width: 500px;
            margin: 0 auto;
            background-color: white!important;
        }
    </style>
</head>
<body>

    <div style="padding: 30px;" class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="terminals.php" class="btn btn-success pull-right"> Back</a>
                    <div class="page-header">
                        <h2>New Terminal</h2>


                    </div>
                    <p>Please fill this form and submit to add new terminal to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($Name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="Name" class="form-control" value="<?php echo $Name; ?>">
                            <span class="help-block"><?php echo $Name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($MaxStorageCapacity_err)) ? 'has-error' : ''; ?>">
                            <label>Max Storage Capacity</label>
                            <input type="text" name="MaxStorageCapacity" class="form-control" value="<?php echo $MaxStorageCapacity; ?>">
                            <span class="help-block"><?php echo $MaxStorageCapacity_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($Lat_err)) ? 'has-error' : ''; ?>">
                            <label>Latitude</label>
                            <input type="text" name="Lat" class="form-control" value="<?php echo $Lat; ?>">
                            <span class="help-block"><?php echo $Lat_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($Lng_err)) ? 'has-error' : ''; ?>">
                            <label>Longitude</label>
                            <input type="text" name="Lng" class="form-control" value="<?php echo $Lng; ?>">
                            <span class="help-block"><?php echo $Lng_err;?></span>
                        </div>

                      <!--  <div class="form-group <?php// echo (!empty($Price_err)) ? 'has-error' : ''; ?>">
                            <label>Price</label>
                            <input type="text" name="Price" class="form-control" value="<?php //echo $Price; ?>">
                            <span class="help-block"><?php// echo $Price_err;?></span>
                        </div> -->
                        <input type="submit" class="btn btn-success" value="Submit">
                        <a href="terminals.php" class="btn btn-default">Cancel</a>
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