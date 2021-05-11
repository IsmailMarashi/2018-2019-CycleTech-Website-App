

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
 


// | BikeID | Make          | Model          | Color      | Terminal | Status    | Lat        | Lng         | Price    | terminalID |


$query = 'insert into bicycle values ( null, ? , ? , ? , ? , ? , 0 , 0 , ? , ? )';

$make = $obj2["make"];
$model = $obj2["model"];
$color = $obj2["color"];
$terminal = $obj2["terminal"];
$terminalid = $obj2["terminalID"];
$status = $obj2["status"];
$price = $obj2["price"];
$cc =$obj2["amount"];
$c = 1;
$s = array();
array_push($s, $make);
array_push($s, $model);
array_push($s, $color);
array_push($s, $terminal);
array_push($s, $status);
array_push($s, $price);
array_push($s, $terminalid);

while ($c < $cc)
	{
	array_push($s, $make);
    array_push($s, $model);
    array_push($s, $color);
    array_push($s, $terminal);
    array_push($s, $status);
    array_push($s, $price);
    array_push($s, $terminalid);
	$query = $query . ', ( null, ? , ? , ? , ? , ? , 0 , 0 , ? , ? ) ';
	$c++;
	}

 $q = $conn->prepare($query);

try
	{
	$q->execute($s);
	if ($q)
		{
		$response_array['status']="success";
		}
	  else
		{
		$response_array['status'] = 'unable to add bikes';
		}
	}
catch(PDOException $e)
    {
    $response_array['status'] = $e->getMessage();
    }
header('Content-type: application/json');
echo json_encode($response_array);
$conn = null;
return;
?>

