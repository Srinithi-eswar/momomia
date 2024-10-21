<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "momodb"; 


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$firstname = $_POST['Firstname'];
$lastname = $_POST['Lastname'];
$email = $_POST['Email'];
$password = $_POST['Password'];


$sql = "INSERT INTO user_profiles (First_name, Last_name, Email_id, Password)
        VALUES ('$firstname', '$lastname', '$email', '$password')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
