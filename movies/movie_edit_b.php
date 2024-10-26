<?php
include('../backend/db01.php');

// Retrieve form data from POST request
$m_id = $_POST['m_id'];
$m_name = $_POST['m_name'];
$m_t_url = $_POST['m_t_url'];
$m_v_url = $_POST['m_v_url'];
$m_year = $_POST['m_year'];
$m_time = $_POST['m_time'];
$m_dis = $_POST['m_dis'];

// Check if a new movie poster is uploaded
if (isset($_FILES['m_p_url']) && $_FILES['m_p_url']['error'] == 0) {
    // Handle file upload
    $poster_tmp_name = $_FILES['m_p_url']['tmp_name'];
    $poster_name = basename($_FILES['m_p_url']['name']);
    $poster_destination = "../uploads/" . $poster_name;

    // Move uploaded file to the target directory
    if (move_uploaded_file($poster_tmp_name, $poster_destination)) {
        $m_p_url = $poster_destination; // Set the new poster URL in the database
    } else {
        echo "Failed to upload the poster image.";
        exit;
    }
} else {
    // If no new poster is uploaded, keep the old one
    $m_p_url = $_POST['old_m_p_url'];
}

// Update movie details in the database
$query = "UPDATE movies 
          SET m_name = '$m_name', m_t_url = '$m_t_url', m_v_url = '$m_v_url', m_p_url = '$m_p_url', m_year = '$m_year', m_time = '$m_time', m_dis = '$m_dis'
          WHERE m_id = '$m_id'";

if (mysqli_query($conn, $query)) {
    // echo "Movie details updated successfully!";
    echo "<script>alert('Update Successfully!')</script>";
    echo "<script>window.location='movie_list.php'</script>";
    // Optionally, redirect back to the movie list or movie details page
    // header("Location: movie_list.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
    echo "<script>window.location='movie_list.php'</script>";
}

// Close the database connection
mysqli_close($conn);
?>
