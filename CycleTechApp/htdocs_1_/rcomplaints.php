<?php
$json = file_get_contents("php://input");
$j = json_decode( $json, true );
$response_array['status']='start';
try {
    $conn = new PDO("mysql:host=localhost;dbname=cycletech", "admin", "password");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $q = $conn->prepare("select * from customercomplaint where receiptid= ?  order by cdate desc;");
//$q = $conn->prepare("select * from customercomplaint  order by cdate desc;");

try {
    $id=$j["id"];
    $q->execute([$id] );
    if($q){
        if(($q->rowCount())>0){
            $f = $q->fetchall();
            $response_array['status'] = 'success';
            $response_array['complaints']=$f;
        }
        else{
            $response_array['status'] = 'no complaints';
        }
    }
    else {
        $response_array['status'] = 'fail';
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


 
