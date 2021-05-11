<?php
// Check existence of id parameter before processing further
if(isset($_GET["BikeID"]) && !empty(trim($_GET["BikeID"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM bicycle WHERE BikeID = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["BikeID"]);
        
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
                $Color = $row["Terminal"];
                $Color = $row["Status"];
                $Color = $row["Lat"];
                $Color = $row["Lng"];
                $Color = $row["Price"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
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
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <body style="padding: 30px; padding-top: 50px; padding-left: 70px;   background-color:#f5f5f0; ">

    <div style="background-color:white; " class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record</h1>
                        
                    </div>
                    <div class="form-group">
                        <label>Make</label>
                        <p class="form-control-static"><?php echo $row["Make"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Model</label>
                        <p class="form-control-static"><?php echo $row["Model"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <p class="form-control-static"><?php echo $row["Color"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Terminal</label>
                        <p class="form-control-static"><?php echo $row["Terminal"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <p class="form-control-static"><?php echo $row["Status"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Lat</label>
                        <p class="form-control-static"><?php echo $row["Lat"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Lng</label>
                        <p class="form-control-static"><?php echo $row["Lng"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <p class="form-control-static"><?php echo $row ["Price"]; ?></p>
                    </div> 
                    <p><a href="index1.php" class="btn btn-success">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
