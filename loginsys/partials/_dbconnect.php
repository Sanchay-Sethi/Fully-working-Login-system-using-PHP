<?php
$username = "root";
$servername = "localhost";
$password = "";
$database = "usershash";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry connection has not been established-->".mysqli_error($conn));
}
?>