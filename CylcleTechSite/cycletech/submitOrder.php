
<?php
$json = file_get_contents("php://input");
$obj2 = json_decode($json, true);
?>
<?php
$response_array['status'] = "start";
try
	{
	$conn = new PDO("mysql:host=localhost;dbname=cycletech", "admin", "password");

	// set the PDO error mode to exception

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$response_array['status'] = "Connected successfully";
	}

catch(PDOException $e)
	{
	$response_array['status'] = "Connection failed: " . $e->getMessage();
	}

$order = $obj2['order'];
$cc = sizeof($order);
$c = 1;
$s = array();
$query = 'select * from bicycle where bikeid in ( ? ';
array_push($s, $order[0]["BikeID"]);

while ($c < $cc)
	{
	array_push($s, $order[$c]["BikeID"]);
	$query = $query . ', ? ';
	$c++;
	}

$query = $query . ') and status="Available";';
$q = $conn->prepare($query);
try
	{
	$q->execute($s);
	if ($q)
		{
		$f = $q->fetchAll();
		$rowc = sizeof($f);
		if ($rowc == $cc)
			{
			$query = 'update bicycle set status="In-use" where bikeid in ( ? ';
			$c = 1;
			while ($c < $cc)
				{
				$query = $query . ', ? ';
				$c++;
				}

			$query = $query . ') ;';
			$q = $conn->prepare($query);
			try
				{
				$q->execute($s);
				if ($q)
					{
					$response_array['status'] = 'bike state success';
					}
				  else
					{
					$response_array['status'] = 'bike state failed';
					}
				}

			catch(PDOException $e)
				{
				$response_array['status'] = $e->getMessage();
				}
			}
		  else
			{
			$response_array['status'] = 'A bike in your cart is already booked';
			}
		}
	  else
		{
		$response_array['status'] = 'unable to request bikes';
		}
	}

catch(PDOException $e)
	{
	$response_array['status'] = $e->getMessage();
	}

if ($response_array['status'] == 'bike state success')
	{
	$q = $conn->prepare('INSERT INTO receipt VALUES (null , ? ,? , ? ,?)');
	try
		{
		$MemberId = $obj2["id"];
		$PickUpTime = $obj2["start"];
		$DropOffTime = $obj2["end"];
		$AmountPaid = round($obj2["total"]);
		$q->execute([$MemberId, $PickUpTime, $DropOffTime, $AmountPaid]);
		if ($q)
			{
			$q = $conn->prepare('select receiptID from receipt where MemberId= ? and PickUpTime = ? and DropOffTime = ? and AmountPaid = ?  group by receiptID desc ');
			try
				{
				$q->execute([$MemberId, $PickUpTime, $DropOffTime, $AmountPaid]);
				if ($q)
					{
					$f = $q->fetch();
					$response_array['status'] = 'receipt fetch success';
					$response_array['status'] = $f;
					$r = $f['receiptID'];
					$query = "insert into receiptbikes VALUES  (? , ? , ? ,null  )"; // BikeID | receiptID | pickUpTerminal | dropOffTerminal
					$c = 1;
					$s = array();
					array_push($s, $order[0]["BikeID"]);
					array_push($s, $r);
					array_push($s, $order[0]["terminalID"]);
					while ($c < $cc)
						{
						array_push($s, $order[$c]["BikeID"]);
						array_push($s, $r);
						array_push($s, $order[$c]["terminalID"]);
						$query = $query . ', (? , ? , ? , null  ) ';
						$c++;
						}

					$q = $conn->prepare($query);
					try
						{
						$q->execute($s);
						if ($q)
							{
							$response_array['status'] = 'success';
							$response_array["receiptid"] = $r;
							$response_array["MemberId"] = $MemberId;
							}
						  else
							{
							$response_array['status'] = 'receipts bikes failed to add';
							}
						}

					catch(PDOException $e)
						{
						$response_array['status'] = $e->getMessage();
						}
					}
				  else
					{
					$response_array['status'] = 'failed to fetch receipt id';
					}
				}

			catch(PDOException $e)
				{
				$response_array['status'] = $e->getMessage();
				}
			}
		  else
			{
			$response_array['status'] = "receipt insertion error";
			}
		}
	catch(PDOException $e)
		{
		$response_array['status'] = $e->getMessage();
		}
	}

header('Content-type: application/json');
echo json_encode($response_array);
$conn = null;
return;
?>