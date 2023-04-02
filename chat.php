<?php
    // Include database configuration
    include('dbconfig.php');

    // Retrieve messages from the database
    $sql = "SELECT * FROM messages";
    $result = mysqli_query($conn, $sql);

    // Check for errors
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Output messages in HTML
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div><strong>" . $row['username'] . "</strong>: " . $row['message'] . "</div>";
    }

    // Close the database connection
    mysqli_close($conn);
?>
