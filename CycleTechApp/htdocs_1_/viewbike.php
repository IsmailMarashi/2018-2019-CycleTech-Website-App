
<?php
$response_array['status']="start";

try {
    $conn = new PDO("mysql:host=localhost;dbname=cycletech", "admin", "password",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $response_array['status']= "Connected successfully"; 
    
    }
catch(PDOException $e)
    {
    $response_array['status']= "Connection failed: " . $e->getMessage();
    }

$q = $conn->prepare("select * from bicycle;");

try {
    $q->execute();
    if($q){
        if(($q->rowCount())>0){
            $f = $q->fetchAll();
            $response_array['status'] = 'success';
            $response_array['bikes']= $f;
            header('Content-type: application/json');  
            echo json_encode($response_array);
            $conn=null;
            return;
        }
        else{
            $response_array['status'] = 'No bikes';
        }
    }
    {
        $response_array['status'] = 'query failed';
    }
}
catch(PDOException $e)
    {
    $response_array['status'] = $e->getMessage();
    }
header('Content-type: application/json');  
echo json_encode($response_array);
$conn=null;
return;
?>


 
