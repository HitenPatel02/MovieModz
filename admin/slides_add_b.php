<?php
// Database connection settings
require('../backend/session_admin.php');
require('../backend/db01.php');

// Create uploads directory if it doesn't exist


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $caption = $_POST['caption'];
    $image_path = $_POST['image_path'];



        // SQL query to insert data
        $sql = "INSERT INTO slides VALUES (null,'$image_path', '$caption')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='success'>New slides added successfully!</div>";
            echo "<script>window.location='slder_list.php'</script>";
        } else {
            echo "<div class='error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }
    }

    // Close connection
    $conn->close();

?>
