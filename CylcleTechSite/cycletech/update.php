<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$Make = $Model = $Color = $Terminal = $Status = $Lat = $Lng = $Price = "";
$Make_err = $Model_err = $Color_err =  $Terminal_err = $Status_err = $Lat_err = $Lng_err = $Price_err ="";
 
// Processing form data when form is submitted
if(isset($_POST["BikeID"]) && !empty($_POST["BikeID"])){
    // Get hidden input value
    $id = $_POST["BikeID"];
    
    // Validate name
    $input_Make = trim($_POST["Make"]);
    if(empty($input_Make)){
        $Make_err = "Please enter a make.";
    } elseif(!filter_var($input_Make, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $Make_err = "Please enter a valid make.";
    } else{
        $Make = $input_Make;
    }
    
    // Validate address address
    $input_Model = trim($_POST["Model"]);
    if(empty($input_Model)){
        $Model_err = "Please enter an address.";     
    } else{
        $Model = $input_Model;
    }

    $input_Color = trim($_POST["Color"]);
    if(empty($input_Color)){
        $Color_err = "Please enter color.";     
    } else{
        $Color = $input_Color;
    }

    $input_Terminal = trim($_POST["Terminal"]);
    if(empty($input_Terminal)){
        $Terminal_err = "Please enter terminal.";     
    } else{
        $Terminal = $input_Terminal;
    }

    $input_Status = trim($_POST["Status"]);
    if(empty($input_Status)){
        $Status_err = "Please enter an address.";     
    } else{
        $Status = $input_Status;
    }

    $input_Lat = trim($_POST["Lat"]);
    if(empty($input_Lat)){
        $Lat_err = "Please enter an address.";     
    } else{
        $Lat = $input_Lat;
    }
    
    $input_Lng = trim($_POST["Lng"]);
    if(empty($input_Lng)){
        $Lng_err = "Please enter an address.";     
    } else{
        $Lng = $input_Lng;
    }
    
    $input_Price = trim($_POST["Price"]);
    if(empty($input_Price)){
       $Price_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_Price)){
       $Price_err = "Please enter a positive integer value.";
    } else{
     $Price = $input_Price;
    }

    // Check input errors before inserting in database
    if(empty($Make_err) && empty($Model_err) && empty($Color_err) && empty($Terminal_err) && empty($Status_err) && empty($Lat_err) && empty($Lng_err) & empty($Price_err))  {
        // Prepare an update statement
        $sql = "UPDATE bicycle SET Make=?, Model=?, Color=?, Terminal=?, Status=?, Lat=?, Lng=?,Price=?  WHERE BikeID=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssi", $param_Make, $param_Model, $param_Color, $param_Terminal, $param_Status, $param_Lat,   $param_Lng, $param_Price, $param_BikeID);
            
            // Set parameters
            $param_Make = $Make;
            $param_Model = $Model;
            $param_Color = $Color;
            $param_Terminal = $Terminal;
            $param_Status = $Status;
            $param_Lat = $Lat;
            $param_Lng = $Lng;
            $param_Price = $Price;
            $param_BikeID = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
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
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["BikeID"]) && !empty(trim($_GET["BikeID"]))){
        // Get URL parameter
        $id =  trim($_GET["BikeID"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM bicycle WHERE BikeID = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_BikeID);
            
            // Set parameters
            $param_BikeID = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $Make = $row["Make"];
                    $Model = $row["Model"];
                    $Color = $row["Color"];
                    $Terminal = $row["Terminal"];
                    $Status = $row["Status"];
                    $Lat = $row["Lat"];
                    $Lng = $row["Lng"];
                    $Price = $row["Price"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
    body{

        background-color:#f5f5f0;
        padding: 30px;
    }
        .wrapper{
            width: 500px;
            margin: 0 auto;
            background-color:white;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        
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
                            <label>Latitude</label>
                            <input type="text" name="Lat" class="form-control" value="<?php echo $Lat; ?>">
                            <span class="help-block"><?php echo $Lat_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($Lng_err)) ? 'has-error' : ''; ?>">
                            <label>Longitude</label>
                            <input type="text" name="Lng" class="form-control" value="<?php echo $Lng; ?>">
                            <span class="help-block"><?php echo $Lng_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($Price_err)) ? 'has-error' : ''; ?>">
                            <label>Price</label>
                            <input type="text" name="Price" class="form-control" value="<?php echo $Price; ?>">
                            <span class="help-block"><?php echo $Price_err;?></span>
                        </div>

                        <input type="hidden" name="BikeID" value="<?php echo $BikeID; ?>"/>
                        <input type="submit" class="btn btn-success" value="Submit">
                        <a href="index1.php" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>

<footer style="padding: 30px;" class="page-footer bottom">

    <!-- Copyright -->
    <div  class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright CycleTech
    </div>
    <!-- Copyright -->

  </footer>

</html>