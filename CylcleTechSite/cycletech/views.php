<?php 
$sql = 'SELECT * from rem';
$sq = 'SELECT * from customerreceipt';
$conn = mysqli_connect("localhost","root","","cycletech");		
		
$query = mysqli_query($conn, $sql);
$q = mysqli_query($conn, $sq);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Statistics</title>

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
	
	<div style="padding:50px; padding-top:30px !important; background-color:white !important;  " class = "container responsive">
		<a style=" font-size:20px; color:grey;" href="admin.php"  role="button"> > Back</a>

		<h1 style="font-size:30px !important; padding-bottom: 20px; color: grey; ">Current Bike Location</h1>
	<table class="data-table responsive">
		<thead>
			<tr>
				<th>IdNumber</th>
				<th>Terminal</th>
				<th>NumOfBicycle</th>
				<th>longitude</th>
				<th>latitude</th>
				<th>MaxStorageCapacity</th>
			</tr>
		</thead>
		<tbody>
		<?php

		while ($row = mysqli_fetch_array($query))
		{
            echo   "<tr>

					<td>".$row['IdNumber']."</td>
					<td>".$row['Terminal']."</td>
					<td>".$row['NumOfBicycle']."</td>
					<td>".$row['lat']."</td>
					<td>".$row['lng']."</td>
					<td>".$row['MaxStorageCapacity']."</td>
				</tr>";
		}?>
		</tbody>

	</table>

<h1 style="color:grey;font-size:30px !important; padding-bottom: 20px; padding-top:50px; ">CUSTOMERS' RECEIPTS</h1>
	<table class="data-table responsive">
		<thead>
			<tr>
				<th>Receipt ID</th>
				<th>Member ID</th>
				<th>Bike ID</th>
				<th>Make</th>
				<th>Model</th>
				<th>Color</th>
				<th>pickUp Time</th>
				<th>DropOff Time</th>
				<th>Pick-Up Terminal</th>
				<th>DropOff Terminal</th>
				<th>RentalLength</th>
				<th>Amount Paid (AED)</th>
			</tr>
		</thead>
		<tbody>
		<?php

		while ($rows = mysqli_fetch_array($q))
		{
            echo   "<tr>

					<td>".$rows['receiptID']."</td>
					<td>".$rows['MemberId']."</td>
					<td>".$rows['BikeID']."</td>
					<td>".$rows['Make']."</td>
					<td>".$rows['Model']."</td>
					<td>".$rows['Color']."</td>
					<td>".$rows['PickUpTime']."</td>
					<td>".$rows['DropOffTime']."</td>
					<td>".$rows['RentalLength']."</td>
					<td>".$rows['pickUpTerminal']."</td>
					<td>".$rows['dropOffTerminal']."</td>
					<td>".$rows['AmountPaid']."</td>

				</tr>";
		}?>
		</tbody>

	</table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>
<footer class="page-footer bottom">

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright CycleTech
    </div>
    <!-- Copyright -->

  </footer>






</html>