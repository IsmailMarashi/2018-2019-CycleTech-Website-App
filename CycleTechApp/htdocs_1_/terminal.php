 

 

<?php
$json = file_get_contents("php://input");
?>

<?php
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
    $q = $conn->prepare("select * from rem;");
try {

    $q->execute();
    if($q){
        if(($q->rowCount())>0){
            $f = $q->fetchAll();
            $response_array['status'] = 'success';
            $response_array['terminals']=$f;
        }
        else{
            $response_array['status'] = 'No Terminal';
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


 
