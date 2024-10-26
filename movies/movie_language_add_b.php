<?php
// Include database connection file
include '../backend/db01.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $L_name = $_POST['L_name'];



    // SQL query to insert the movie data into the database
    $sql = "INSERT INTO `m_langvage` (`l_id`, `L_name`) VALUES (NULL, '$L_name');";

    if (mysqli_query($conn, $sql)) {
        echo "New language added successfully!";
        echo "<script>window.location='movie_language_list.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>window.location='movie_language_list.php'</script>";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
