<?php

$name = $mobile = $street = $city = $email = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
 
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $email = $_POST["email"];

  
    $servername = "your_server_name";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

 
    $sql = "INSERT INTO your_table_name (customer_name, phone_number, street, city, email) VALUES ('$name', '$mobile', '$street', '$city', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}


function editData() {
  
}

function deleteData() {
 
?>
