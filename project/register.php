<?php
 
 session_start();
 $con = mysqli_connect('localhost');
 mysqli_select_db($con, 'eventbooking');
 $name = $_POST['user'];
 $pass = $_POST['password'];

 $s = "select * from usertable where name = '$name'";

 $result = mysqli_query($con, $s);

 $num = mysqli_num_rows($result);
 if ($sum==1)
 {
    echo"user name already taken";
 }
 else{
    $reg = "insert into usertable (name, password) values('$name','$pass')";
    mysqli_query($con, $reg);
    echo "registration sucessfull";
 }
?>

