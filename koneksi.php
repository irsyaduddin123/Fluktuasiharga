<?php

try
{
    $conn = mysqli_connect("localhost","root","") or die ("SERVER DOWN");
    $db = mysqli_select_db($conn,"ppsi") or die ("DATABASE TIDAK ADA");
}
catch (\Throwable $th)
{
    throw $th;
}




// $mysql_hostname = "localhost";
// $mysql_user = "root";
// $mysql_password = "";
// $mysql_database = "ppsi";
// // Create connection
// $db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) ;
// if (!$db) 
//   {
//     die("Connection failed: " . mysqli_connect_error());
//   }
//   else{
//     // echo "Connected successfully";
//   }

?>