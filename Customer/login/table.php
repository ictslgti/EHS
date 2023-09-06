<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <link rel="stylesheet" href="style.css">
    <h1 style="color: rgb(85, 223, 85);">
        Register!!
    </h1>
    <h2>User Data Management</h2>

    <div id="formContainer">
        <label for="nameInput">
            Customer Name:
        </label>
        <input type="text" id="nameInput" placeholder="Enter your name">
        <label for="numberInput">
            Phone Number:
        </label>
        <input type="text" id="numberInput" placeholder="Enter your mobile Number">
        <label for="numberInput">
            Street:
        </label>
        <input type="text" id="numberInput" placeholder=" Street">
        <label for="numberInput">
            City:
        </label>
        <input type="text" id="numberInput" placeholder=" City">
        <label for="emailInput">
            Email I'd:
        </label>
        <input type="email" id="emailInput" placeholder="Enter your email">


        <button onclick="addData()">
            Register
        </button>
    </div>
    <table id="outputTable">
        <tr>
            <th>Customer Name</th>
            <th>Phone Number</th>
            <th>Street</th>
            <th>City</th>
            <th>Email</th>
        </tr>
    </table>


<?php

$name = $mobile = $street = $city = $email = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
 
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $email = $_POST["email"];

  
 
    
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
}
?>
