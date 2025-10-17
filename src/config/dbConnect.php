<?php
// Database Connection
// Author: Mark Anthony Villahermosa

$host = "db";          // Usually localhost
$user = "php_docker";               // Your MySQL username
$pass = "password";                   // Your MySQL password
$dbname = "php_docker"; // Your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Set character encoding to UTF-8
$conn->set_charset("utf8");

// For debugging, uncomment this:
// echo "Database connected successfully.";

$result = $conn->query("SELECT * FROM patients");

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Patient: " . htmlspecialchars($row['full_name']) . "<br>";
    }
} else {
    echo "No patients found.";
}
?>
