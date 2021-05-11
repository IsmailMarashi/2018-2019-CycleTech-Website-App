<?php
$json = file_get_contents("php://input");
$obj2 = json_decode( $json, true );
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
$q = $conn->prepare('INSERT INTO member VALUES (null , :fname, :lname , :email , :phone , :address , :pass, :type )');

try {
    $fname=$obj2["first"];
    $lname=$obj2["last"];
    $email=$obj2["email"];
    $phone=$obj2["phone"];
    $address=$obj2["address"];
    $pass=$obj2["password"];
    $type=$obj2["typet"];
    $q->bindParam(':fname', $fname, PDO::PARAM_STR);
    $q->bindParam(':lname', $lname, PDO::PARAM_STR);
    $q->bindParam(':email', $email, PDO::PARAM_STR);
    $q->bindParam(':phone', $phone, PDO::PARAM_STR);
    $q->bindParam(':address', $address, PDO::PARAM_STR);
    $q->bindParam(':pass', $pass, PDO::PARAM_STR);  
    $q->bindParam(':type', $type, PDO::PARAM_STR);  
    $q->execute();
    if($q){
        $response_array['status'] = 'success';
    }
    header('Content-type: application/json');
    echo json_encode($response_array);
    }
catch(PDOException $e)
    {
    header('Content-type: application/json');  
    $response_array['status'] = $e->getMessage();
     echo json_encode($response_array);
    }

$conn=null;
?>


 
