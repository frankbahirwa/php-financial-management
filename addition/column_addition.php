<?php
// Database connection parameters
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select integers from the database column
$sql = "SELECT column_name FROM your_table";

$result = $conn->query($sql);

// Variable to store the sum
$sum = 0;

// If records are found
if ($result->num_rows > 0) {
    // Loop through each row
    while($row = $result->fetch_assoc()) {
        // Add each integer to the sum
        $sum += $row['column_name'];
    }
    // Output the sum
    echo "Sum of integers: " . $sum;
} else {
    echo "No records found";
}

// Close connection
$conn->close();
?>
