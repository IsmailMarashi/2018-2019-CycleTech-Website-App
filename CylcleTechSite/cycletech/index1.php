<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 850px;
            margin:0 auto;

        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body style="padding: 30px; padding-top: 50px; padding-left: 70px;   background-color:#f5f5f0; ">
    <a style="width:8%; font-size: 15px;" href="Admin.php" class="btn btn-success"> >> Back</a>

    <div style="background-color:white;" class="wrapper">
        
        <div  class="container-fluid">

            <div class="row">

                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 style="text-align: center;">Bicycle Details</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add New Bicycle</a>


                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM bicycle";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                    
                                        echo "<th>BikeID</th>";
                                        echo "<th>Make</th>";
                                        echo "<th>Model</th>";
                                        echo "<th>Color</th>";
                                        echo "<th>Terminal</th>";
                                        echo "<th>Status</th>";
                                        echo "<th>Latitude</th>";
                                        echo "<th>Longitude</th>";
                                        echo "<th>Price</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['BikeID'] . "</td>";
                                        echo "<td>" . $row['Make'] . "</td>";
                                        echo "<td>" . $row['Model'] . "</td>";
                                        echo "<td>" . $row['Color'] . "</td>";
                                        echo "<td>" . $row['Terminal'] . "</td>";
                                        echo "<td>" . $row['Status'] . "</td>";
                                        echo "<td>" . $row['Lat'] . "</td>";
                                        echo "<td>" . $row['Lng'] . "</td>";
                                        echo "<td>" . $row['Price'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='read.php?BikeID=". $row["BikeID"]."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";

                                            echo "<a href='update.php?BikeID=". $row["BikeID"] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?BikeID=". $row["BikeID"] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
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