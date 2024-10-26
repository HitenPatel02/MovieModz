<?php
// Database connection parameters
require('../../backend/db01.php');
// Check connection


// Capture form data (e.g., from an HTML form with method="POST")
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize input data
    // $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    // $uemail = mysqli_real_escape_string($conn, $_POST['uemail']);
    // $uphone = mysqli_real_escape_string($conn, $_POST['uphone']);
    // $upass = $_POST['upass'];
    // $ufrands = mysqli_real_escape_string($conn, $_POST['ufrands']);
$uname = $_POST['uname'];
$uemail = $_POST['uemail'];
$uphone = $_POST['uphone'];
$upass = $_POST['upass'];
$ufrands = $_POST['ufrands'];

    // Validate input data (basic example)
    // if (empty($uname) || empty($uemail) || empty($uphone) || empty($upass) || empty($ufrands)) {
    //     echo "All fields are required.";
    //     exit;
    // }


    $sql_ch = "SELECT * FROM user WHERE uname =  '$uname'";

    $query_ch = mysqli_query($conn, $sql_ch);
    $fetch = mysqli_fetch_array($query_ch);
    $row = mysqli_num_rows($query_ch);

if($row > 0){
    echo "<script>alert('User alredy Exit')</script>";
    echo "<script>window.location='user_reg.php'</script>";
    // header("Location: user_reg.php");
}else{

    // Hash the password
    $hashedPassword = password_hash($upass, PASSWORD_BCRYPT);

    // Insert user data into the database
    $sql = "INSERT INTO user  VALUES (null,'$uname', '$uemail', '$uphone', '$hashedPassword', '$ufrands')";
    
    if (mysqli_query($conn, $sql)) {
             echo "<script>alert('Regester Successfully!')</script>";
            echo "<script>window.location='../signin/signin.html'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
    // Close the connection
    mysqli_close($conn);
}
?>
