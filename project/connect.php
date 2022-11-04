<?php

$username = $_POST['username'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

//database connection

$conn = new mysqli('localhost', 'root','','eventbooking');

if($conn->connect_error)
{
    die("connection failed: '.$conn->connect_error");


}

else{
    $stmt = $conn->prepare("insert into registration(username,phonenumber,email,password,confirmpassword) values(?,?,?,?,?)");
    $stmt->bind_param("sisss", $username, $phonenumber ,$email, $password ,$confirmpassword);
    $stmt->execute();
    echo "registration sucessfull";
    $stmt->close();
    $conn->close();
}
?>