<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Default username for XAMPP MySQL
$password = ""; // Default password for XAMPP MySQL
$database = "momodb"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$firstname = $_POST['Firstname'];
$lastname = $_POST['Lastname'];
$email = $_POST['Email'];
$password = $_POST['Password'];

// Prepare SQL statement
$sql = "INSERT INTO user_profiles (First_name, Last_name, Email_id, Password)
        VALUES ('$firstname', '$lastname', '$email', '$password')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
