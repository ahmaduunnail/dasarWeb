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
$sql = "INSERT INTO user (id, username, password)
VALUES ('1', 'lleans', 'apa123')
)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
