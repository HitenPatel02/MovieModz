<?php
require('../backend/session_admin.php');
require('../backend/db01.php');
$a_id = $_POST['a_id'];
$a_name = $_POST['a_name'];
$a_age = $_POST['a_age'];
$a_gender = $_POST['a_gender'];
$a_dob = $_POST['a_dob'];

echo $a_id;

// Handle image upload if a new one is provided
if (isset($_FILES['a_img_url']) && $_FILES['a_img_url']['error'] == 0) {
    // Specify the target directory and file
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["a_img_url"]["name"]);
    
    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES["a_img_url"]["tmp_name"], $target_file)) {
        $a_img_url = $target_file;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    // Use existing image if no new file is uploaded
    $a_img_url = $_POST['existing_img_url'];
}

// Update query

$update_query = "UPDATE actors SET a_name = '$a_name', a_age = '$a_age', a_gender = '$a_gender', a_dob = '$a_dob', a_img_url = '$a_img_url' WHERE a_id = '$a_id'";

// Execute the query
if (mysqli_query($conn, $update_query)) {
    // // echo "Actor updated successfully!";

    echo "<script>alert('Update Successfully!')</script>";
    echo "<script>window.location='actor_list.php'</script>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


?>