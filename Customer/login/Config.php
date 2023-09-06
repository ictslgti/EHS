<?php
//config.php 

$conn=mysqli_connect('localhost','root','','hire_work');
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " .
mysqli_connect_error();
}
//echo "Connected successfully";
?>