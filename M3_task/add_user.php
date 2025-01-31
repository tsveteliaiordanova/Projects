<?php

// Database connection
$servername = "localhost";
$username = "root"; 
$password = "";
$db = "tickets";


$email = "email";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $db);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO users (name, number, email) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt) {
    
    $stmt->bind_param("sis", $name, $number, $email);

   
    if ($stmt->execute()) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
?>