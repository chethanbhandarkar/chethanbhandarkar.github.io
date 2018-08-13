<?php

$username=$_POST["username"];
$password=$_POST["password"];
echo $username;
$servername = "localhost";
$dbusername = "id6642804_travelnowdb";
$dbpassword = "Website1997";
$dbname = "id6642804_customerdatabase";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO customertable (number,username,password)
VALUES ('NULL', ' $username ',' $password ')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 