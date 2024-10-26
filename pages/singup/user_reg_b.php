<?php
// Database connection parameters
require('../../backend/db01.php');
// Check connection


// Capture form data (e.g., from an HTML form with method="POST")
$uname = $_POST['uname'];
$uemail = $_POST['uemail'];
$uphone = $_POST['uphone'];
$upass = $_POST['upass'];
$ufrands = $_POST['ufrands'];
// echo $uemail; 

// Prepare the SQL INSERT query
// $sql = "INSERT INTO user VALUES (NULL,'$uname','$uemail','$uphone','$upass','$ufrands')";
//     $query = mysqli_query($conn, $sql);
//         if($query){
//             echo "<script>alert('Regester Successfully!')</script>";
//             // header("Location: ..\signin\signin.html");
//             echo "<script>window.location='..\signin\signin.html</script>";
//             }
//             else{
//             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//             echo "<a href = 'pages\singup\user_reg.php'> back </a> ";
            
//             }


$sql_ch = "SELECT * FROM user WHERE uname =  '$uname'";

$query_ch = mysqli_query($conn, $sql_ch);
$fetch = mysqli_fetch_array($query_ch);
$row = mysqli_num_rows($query_ch);

if($row > 0){
    echo "<script>alert('User alredy Exit')</script>";
    echo "<script>window.location='user_reg.php'</script>";
    // header("Location: user_reg.php");
}
else{
    $sql = "INSERT INTO user VALUES (NULL,'$uname','$uemail','$uphone','$upass','$ufrands')";
    $query = mysqli_query($conn, $sql);
        if($query){
            echo "<script>alert('Regester Successfully!')</script>";
            echo "<script>window.location='../signin/signin.html'</script>";
            // echo "<script>window.location='..\signin\signin.html</script>";
            }
}
$conn->close();
?>
