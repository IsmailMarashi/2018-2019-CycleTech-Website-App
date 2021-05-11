<?php 
$sql = 'SELECT * from customercomplaint';

$conn = mysqli_connect("localhost","root","","cycletech");		
		
$query = mysqli_query($conn, $sql);


if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Customers' Complaints</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" type="text/css" href="Stylesheet.css" />
  <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous" />
	<style type="text/css">
		body {
			font-size: 15px;
			color: grey;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			margin: 0;
			/*background-color:#b3ff66; */
		}
		table {
			margin: 0 auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
			text-align: center;

		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		h1{
              padding-bottom:10px;

		}
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 600px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
		/*	padding: 7px 17px; */
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #4d9900;
			color:#f2ffe6;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
			padding: 5px;
		}

		/* Table Body */
		.data-table tbody td {
			color: black;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #e6ffcc;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}


	</style>
</head>
<body style="padding: 50px;" class="bg-light">
	
	<div style="padding:50px; padding-top:30px !important; background-color:white !important;  " class = "container">
		<a style=" font-size:20px; color:grey;" href="admin.php"  role="button"> > Back</a>

		<h1 style="font-size:30px !important; padding-bottom: 20px; color: grey; ">Customers' Complaints</h1>
	<table class="data-table">
		<thead>
			<tr>
				<th>receiptID</th>
				<th>Complaints</th>
			</tr>
		</thead>
		<tbody>
		<?php

		while ($row = mysqli_fetch_array($query))
		{
            echo   "<tr>

					<td>".$row['receiptID']."</td>
					<td>".$row['Complaint']."</td>
				</tr>";
		}?>
		</tbody>

	</table>

        
        </div>
        <?php
include_once("config.php");

$sql = "SELECT name, email, complaint FROM complaints";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset) ) {
?>
<div style="margin:0 auto; padding-left: 400px;" class="container">
        <div style="margin:0 auto;" class="row">
                <div class="col-sm-5 mt-4">
                  <div class="card mb-2">
                    <div class="card-body">
                      <h5 class="card-title">Name: <?php echo $record['name']; ?></h5>
                      <p class="card-text">E-mail: <?php echo $record['email']; ?></p>
                      <p class="card-text">complaint: <?php echo $record['complaint']; ?>
                      	
                      </p>
                    </div>
                  </div>
                </div>
               
                              
                                      
        </div>
    </div>

    <?php }?>

</body>
<footer class="page-footer bottom">

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright CycleTech
    </div>
    <!-- Copyright -->

  </footer>
</html>