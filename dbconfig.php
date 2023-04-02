<?php
    // Database configuration
    $db_host = "localhost"; // Host name
    $db_user = "Pratham_Admin"; // Mysql username
    $db_password = "prathamshetty"; // Mysql password
    $db_name = "Pratham_Chatbox"; // Database name

    // Create a database connection
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    // Check for connection errors
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
