<?php
$json = file_get_contents("php://input");
$obj2 = json_decode($json, true);
?>
<?php
$response_array['status'] = "start";
try
	{
	$conn = new PDO("mysql:host=localhost;dbname=cycletech", "admin", "password");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$response_array['status'] = "Connected successfully";
	}

catch(PDOException $e)
	{
	$response_array['status'] = "Connection failed: " . $e->getMessage();
	}
$s=$obj2["id"];
$conn->beginTransaction();
$q = $conn->prepare('delete from receiptbikes where receiptid= ? ');
try
	{
	$q->execute([$s]);
	if ($q)
		{
        $q = $conn->prepare('delete from customercomplaint where receiptid= ? ');
		try
			{
            $q->execute([$s]);
			if ($q)
				{
                $q = $conn->prepare('delete from receipt where receiptid= ? ');
				try
					{
                    $q->execute([$s]);
                    if($q){
                        $response_array['status'] = "success";
                        $conn->commit();
                    }
                    else{
                        $response_array['status'] = 'unable to delete receipt';
                    }
                    
					}

				catch(PDOException $e)
					{
                    $response_array['status'] = $e->getMessage();
					}
				}
			  else
				{
				$response_array['status'] = 'unable to delete receipt complaints';
				}
			}

		catch(PDOException $e)
			{
            $response_array['status'] = $e->getMessage();
			}
		}
	  else
		{
		$response_array['status'] = 'unable to delete receipt bikes';
		}
	}

catch(PDOException $e)
	{
	$response_array['status'] = $e->getMessage();
	}

if($response_array['status']!="success"){
    $conn->rollback();
}

header('Content-type: application/json');
echo json_encode($response_array);
$conn = null;
return;
?>
