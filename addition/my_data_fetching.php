<?php
// Step 1: Connect to MySQL database
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

// Step 2: Fetch integers from first table
$table1_query = "SELECT integer_column FROM table1";
$table1_result = $conn->query($table1_query);

$table1_sum = 0;
if ($table1_result->num_rows > 0) {
    // Loop through rows and calculate sum
    while ($row = $table1_result->fetch_assoc()) {
        $table1_sum += $row["integer_column"];
    }
}

// Step 3: Fetch integers from second table
$table2_query = "SELECT integer_column FROM table2";
$table2_result = $conn->query($table2_query);

$table2_sum = 0;
if ($table2_result->num_rows > 0) {
    // Loop through rows and calculate sum
    while ($row = $table2_result->fetch_assoc()) {
        $table2_sum += $row["integer_column"];
    }
}

// Step 4: Subtract sums
$result = $table1_sum - $table2_sum;

// Step 5: Display or use the result
echo "Result: " . $result;

// Close connection
$conn->close();
?>
