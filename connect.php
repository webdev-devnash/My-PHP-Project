<?php

$server="localhost";
$username="root";
$password=" ";
$database="patel_electric";

$con = mysqli_connect('localhost','root','','patel_electric') or die("Couldn't connect");

define('server','localhost');
define('username','root');
define('password','');
define('database','patel_electric');


// $host="localhost";
// $user_details="root";
// $passw="";
// $db="patel_electric";
// $conn=new mysqli($host,$user_details,$passw,$db);
// if($conn->connect_error){
//     echo "Failed to connect DB".$conn->connect_error;
// }
?>