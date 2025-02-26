<?php

// Corrected database connection
$db = mysqli_connect('localhost', 'root', '', 'travel', 3308);

// Check if the connection was successful
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

?>
