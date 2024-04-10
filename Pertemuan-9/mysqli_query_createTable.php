<?php
$servername = "localhost";
$username = "root";
$dbname = "prakwebdb";

// Create connection
$conn = mysqli_connect($servername, $username, "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE user (
id INT(11) PRIMARY KEY,
username VARCHAR(50),
password VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table user created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
