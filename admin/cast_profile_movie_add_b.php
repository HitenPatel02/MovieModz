<?php
// Include database connection file
include '../backend/db01.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $m_id = $_POST['m_id'];
    $m_name = $_POST['m_name'];
    $a_name = $_POST['a_name'];
    // $m_catagary = $_POST['m_catagary'];
    // $m_langvage = $_POST['m_langvage'];
    // $ufrands = $_POST['ufrands'];
    // echo $m_id."<br>";
    // echo $m_name; 
    // echo $M_id;
    // echo "<br>";
    // echo $m_catagary;
    // echo "<br>";
    // echo $L_name;
    // Prepare the SQL INSERT query
     $sql = "INSERT INTO cast_profile_movie_list VALUES (NULL,'$a_name','$m_name')" ;




    // SQL query to insert the movie data into the database
    // $sql = "INSERT INTO catagry VALUES (null, '$m_category')";

    if (mysqli_query($conn, $sql)) {
        // echo "New catagry added successfully!";
        echo "<script>window.location='cast_profile_movie_list.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        // echo "<script>window.location='movi_profile_add.php'</script>";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
