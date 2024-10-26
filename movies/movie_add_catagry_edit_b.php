<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    require("../backend/db01.php");

    // Get the form data
    $id = $_POST['id'];
    // echo $id;
    $m_category = $_POST['m_catagry'];

    // SQL query to update the category
    $update_query = "UPDATE catagry SET m_catagry = '$m_category' WHERE id = '$id'";

    // Execute the query
    if (mysqli_query($conn, $update_query)) {
        // If update is successful, redirect or display success message
        // echo "Category updated successfully!";
    echo "<script>alert(' Category Update Successfully!')</script>";
    echo "<script>window.location='movie_list_catagry.php'</script>";

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
