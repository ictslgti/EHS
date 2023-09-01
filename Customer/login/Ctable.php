<?php
include_once('Config.php');
try{
    $sql = "CREATE TABLE Customer (
        id INT(6) UNSIGNED AUTO_INCREMENT UNIQUE,
        C_Name VARCHAR(30) NOT NULL,
        Phone VARCHAR(15) PRIMARY KEY,
        Street VARCHAR(40),
        City VARCHAR(40),
        Email VARCHAR(50))";
    mysqli_query($conn, $sql);
    //echo "Table Customer Created Successfully.";
} catch(Exception $e) {
    $message = $e->getMessage();
    echo $message . "<br>";
}
?>