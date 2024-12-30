<?php

// Replace with your actual database credentials
$servername = "sql213.byethost32.com"; // Your MySQL Host Name
$username = "b32_38005741";           // Your MySQL User Name
$password = "!RNDBEk7x6!$9w!";        // Your MySQL Password
$dbname = "b32_38005741_instagram";   // Your MySQL Database Name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // SQL query to insert data into the 'users' table
    $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";

    // Execute the query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>