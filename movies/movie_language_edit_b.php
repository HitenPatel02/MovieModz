<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    require("../backend/db01.php");

    // Get the form data
    $id = $_POST['id'];
    // echo $id;
    $L_name = $_POST['L_name'];

    // SQL query to update the category
    $update_query = "UPDATE m_langvage SET L_name = '$L_name' WHERE l_id = '$id'";

    // Execute the query
    if (mysqli_query($conn, $update_query)) {
        // If update is successful, redirect or display success message
        // echo "Category updated successfully!";
    echo "<script>alert(' langvage Update Successfully!')</script>";
    echo "<script>window.location='movie_language_list.php'</script>";

        // Optionally redirect to a category list page or another page
        // header("Location: category_list.php"); // Uncomment if needed
    } else {
        // If there's an error in updating
        echo "Error updating category: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
