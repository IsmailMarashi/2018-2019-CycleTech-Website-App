 

 

 
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
    $q = $conn->prepare("select * from member where email= ? and password = ? ");
try {
//    $email='ism';
//    $password='ebf2434107ddd21c709a';
    
    $email=$j["email"];
    $password=$j["password"];
    $q->execute([ $email,$password]);
//     $q->execute( );
    if($q){
        if(($q->rowCount())>0){
            $f = $q->fetch();
//            echo $f[0];
            $response_array['status'] = 'success';
//            $n = explode(" ",$f['Name']);
//            $response_array['first']=$f["FName"];
            $response_array['first']="tony";// todo fix
            $response_array['last']=$f['LName'];
            $response_array['email']=$f['Email'];
            $response_array['password']=$f['Password'];
            $response_array['phonenumber']=$f ['PhoneNumber'];
            $response_array['address']=$f ['Address'];
            $response_array['id']=$f['IdClient'];
            $response_array['typet']=$f['Type'];
        }
        else{
            $response_array['status'] = 'NoLogin';
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


 
