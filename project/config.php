<?php
 /*
contains database configuration
 */

 define('DB_SERVER','localhost');
 define('DB_USERNAME','root');
 define('DB_PASSWORD','');
 define('DB_NAME','login');

//try connecting to database
$conn = mysqli_connect (DB_SERVER,DB_USERNAME, DB_PASSWORD, DB_NAME);

if($conn == false)
{
    dir('error: Cannot connect');
}

?>