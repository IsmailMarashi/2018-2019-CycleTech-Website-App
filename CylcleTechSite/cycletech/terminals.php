<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Terminals</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 800px;
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
<body>
    <body style="padding: 30px; padding-top: 70px; background-color:#f5f5f0; ">
    <div style="background-color: white;" class="wrapper">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Terminals</h2>
                        <a href="createT.php" class="btn btn-success pull-right">Add New Terminal</a>


                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM terminal";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                    
                                        echo "<th>IdNumber</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Max Storage Capacity</th>";
                                        echo "<th>Latitude</th>";
                                        echo "<th>Longitude</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['IdNumber'] . "</td>";
                                        echo "<td>" . $row['Name'] . "</td>";
                                        echo "<td>" . $row['MaxStorageCapacity'] . "</td>";
                                        echo "<td>" . $row['Lat'] . "</td>";
                                        echo "<td>" . $row['Lng'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='deleteT.php?IdNumber=". $row["IdNumber"] ."' title='Delete Terminal' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
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
                    <a href="Admin.php" class="btn btn-success pull-right">Back</a>
                </div>
            </div>        
        </div>
        
    </div>
      
</body>

<footer style="padding-top: 100px;" class="page-footer bottom">

    <!-- Copyright -->
    <div  class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright CycleTech
    </div>
    <!-- Copyright -->

  </footer>
</html>