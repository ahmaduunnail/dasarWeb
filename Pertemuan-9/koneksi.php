<?php
$servername = "localhost";
$username = "root";
$dbname = "prakwebdb";

// Create connection
$connect = mysqli_connect($servername, $username, null, $dbname);
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
