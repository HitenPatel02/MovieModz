<?php
// Include database connection file
include '../backend/db01.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $m_category = $_POST['m_category'];



    // SQL query to insert the movie data into the database
    $sql = "INSERT INTO catagry VALUES (null, '$m_category')";

    if (mysqli_query($conn, $sql)) {
        echo "New catagry added successfully!";
        echo "<script>window.location='movie_list_catagry.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>window.location='movie_list_catagry.php'</script>";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
