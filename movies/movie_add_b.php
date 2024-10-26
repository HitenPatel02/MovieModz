<?php
// Include database connection file
include '../backend/db01.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $m_name = $_POST['m_name'];
    $m_t_url = $_POST['m_t_url'];
    $m_v_url = $_POST['m_v_url'];
    $m_year = $_POST['m_year'];
    $m_time = $_POST['m_time'];
    $m_dis = $_POST['m_dis'];

    // Handling file upload for movie poster
    $target_dir = "Movie_Poster/";
    $m_p_url = $target_dir . basename($_FILES["m_p_url"]["name"]);
    move_uploaded_file($_FILES["m_p_url"]["tmp_name"], $m_p_url);

    // SQL query to insert the movie data into the database
    $sql = "INSERT INTO movies 
            VALUES (null, '$m_name', '$m_t_url', '$m_v_url', '$m_p_url', '$m_year', '$m_time', '$m_dis')";

    if (mysqli_query($conn, $sql)) {
        echo "New movie added successfully!";
        echo "<script>window.location='movie_list.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>window.location='movie_add.php'</script>";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
