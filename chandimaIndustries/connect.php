<?php
$email=filter_input(INPUT_POST,'email');
$name =filter_input(INPUT_POST,'username');
$phone=filter_input(INPUT_POST,'phone');
// $message=filter_input(INPUT_POST,'message');

if(!empty($email)){
$host="localhost";
$username = "root";
$password = "";
$email="";
$name="";
$phone="";
$message="";
$dbname="chandima";
//create connection
$conn =new mysqli($host,$username,$password,$email,$name,$phone,$message);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
    $sql="INSERT INTO account(email,username,phone,message)
    values('$email','$name','$phone','$message')";
    if($conn->query($sql)){
        echo "New  record is inserted successfully";
    }else{
        echo "Error:".$sql."<br>".$conn->error;
    }
    $conn->close();
}

}

?>
