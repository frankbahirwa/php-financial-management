<?php
$servername = "localhost";
$username = "username";
$password = "password";
$database = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



<?php
$start_date = "2024-02-20";
$end_date = "2024-02-25";

$sql = "SELECT * FROM your_table WHERE insertion_date BETWEEN '$start_date' AND '$end_date'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Process each row's data
        // Example: echo $row["column_name"];
    }
} else {
    echo "0 results";
}

$conn->close();
?>
