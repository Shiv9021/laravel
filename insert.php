<?php
include ('dbconnect.php');

    $data=stripcslashes(file_get_contents("php://input"));
    //json_decode are use to convert json object to php object or array if true is associative array.
    $mydata=json_decode($data,true);
    
    $name=$mydata["name"];
    $email=$mydata["email"];
    $password=$mydata["password"];

    if(!empty($name)&&!empty($email)&&!empty($password)){
        $sql="INSERT INTO student(`name`, `email`,`password`) VALUES ('$name', '$email','$password')";
        if($conn->query($sql)==TRUE){
            echo "Student data saved successfully";
        }else{
            echo "Unble to saved student data";
        }
    }else{
        echo "Fill ALl Fileds";
    }

    $age = ["Peter"=>35, "Ben"=>37, "Joe"=>43];

?>
