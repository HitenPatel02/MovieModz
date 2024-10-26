<?php
// Database connection settings
require('../backend/session_admin.php');
require('../backend/db01.php');

// Create uploads directory if it doesn't exist
$upload_dir = 'uploads/';
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $a_name = $_POST['a_name'];
    $a_age = $_POST['a_age'];
    $a_gender = $_POST['a_gender'];
    $a_dob = $_POST['a_dob'];
    
    // Handle file upload
    $a_img_url = $_FILES['a_img_url']['name'];
    $target_file = $upload_dir . basename($a_img_url);
    
    if (move_uploaded_file($_FILES['a_img_url']['tmp_name'], $target_file)) {
        // SQL query to insert data
        $sql = "INSERT INTO actors VALUES (null,'$a_name', '$a_age', '$a_gender', '$a_dob', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='success'>New actor added successfully!</div>";
            echo "<script>window.location='actor_list.php'</script>";
        } else {
            echo "<div class='error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }
    } else {
        echo "<div class='error'>There was an error uploading the image.</div>";
    }

    // Close connection
    $conn->close();
}
?>
