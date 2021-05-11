 

 

 
<?php
$json = file_get_contents("php://input");
$j = json_decode( $json, true );

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
//        $q = $conn->query("select * from member where email= 'ism' and password = 'ebf2434107ddd21c709a' ");
//    $q = $conn->prepare("select  TIMESTAMPDIFF(MINUTE,'2009-05-18 15:45:57.005678','2009-05-18 15:45:57.005678'); ");
//    $q = $conn->prepare("select  TIMESTAMPDIFF(MINUTE, :from , :to ); ");
    $q = $conn->prepare("select  TIMESTAMPDIFF(MINUTE, ? , ? ); ");
try {
    $fro=$j["tFrom"];
    $to=$j["tTo"];
//    $fro='2019-3-21 23:25:00';
//    $to= $fro;
    $q->execute([$fro,$to]);
//     $q->execute( );
    if($q){
        if(($q->rowCount())>0){
            $f = $q->fetch();
            $response_array['status'] = 'success';
            $response_array['q']=$f[0];
 
        }
        else{
            $response_array['status'] = 'error';
        }
    header('Content-type: application/json');
    echo json_encode($response_array);
    }
}
catch(PDOException $e)
    {
    header('Content-type: application/json');  
    $response_array['status'] = $e->getMessage();
     echo json_encode($response_array);
    }
$conn=null;
?>


 
 

 

 
<?php
//$json = file_get_contents("php://input");
//$j = json_decode( $json, true );
//
//try {
//    $conn = new PDO("mysql:host=localhost;dbname=cycletech", "admin", "password");
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
////    echo "Connected successfully"; 
//    }
//catch(PDOException $e)
//    {
//    echo "Connection failed: " . $e->getMessage();
//    }
//    $q = $conn->prepare("select TIMESTAMPDIFF(MINUTE, ? , ? ); ");
//try {
// 
//    $fro=$j["fro"];
//    $to=$j["to"];
//    $q->execute([$fro,$to]);
//    if($q){
//        if(($q->rowCount())>0){
//            $f = $q->fetch();
//             $response_array['status'] = 'success';
//             $response_array['q']=$f[0];
//        }
//        else{
//            $response_array['status'] = 'error';
//        }
//    header('Content-type: application/json');
//    echo json_encode($response_array);
//    }
//}
//catch(PDOException $e)
//    {
//    header('Content-type: application/json');  
//    $response_array['status'] = $e->getMessage();
//     echo json_encode($response_array);
//    }
//$conn=null;
?>


 
