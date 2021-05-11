<?php
$json = file_get_contents("php://input");
$obj2 = json_decode($json, true);
?>
<?php
$response_array['status'] = "start";
try
	{
	$conn = new PDO("mysql:host=localhost;dbname=cycletech", "admin", "password", array(
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
	));

	// set the PDO error mode to exception

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$response_array['status'] = "Connected successfully";
	}

catch(PDOException $e)
	{
	$response_array['status'] = "Connection failed: " . $e->getMessage();
	}

$q = $conn->prepare("update bicycle set Status = ? where BikeID = ?");
$id= $obj2["id"];
$status= $obj2["status"];
try
	{
	$q->execute([$status ,$id]);
	if ($q)
		{
		 
		$response_array['status'] = 'success';

		}
	  else
		{
		$response_array['status'] = 'Fail';
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