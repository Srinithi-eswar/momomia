<?php
// Retrieve form data from profile.html
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Create a connection to MySQL database
$servername = "localhost";  // Change if your MySQL server is hosted elsewhere
$username = "root";          // Default XAMPP username
$password = "";              // Default XAMPP password
$dbname = "momodp";          // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to insert data into profiles table
$sql = "INSERT INTO signup (First_name, Last_name, Email_id, Password) VALUES ('$firstname', '$lastname', '$email', '$password')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
