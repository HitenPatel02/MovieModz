<?php

require('../../backend/db01.php');
    // Retrieve and sanitize input data
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $uname = $_POST['uname'];
        $upass = $_POST['upass'];
    
        // Sanitize inputs to prevent SQL injection
        // $uname = mysqli_real_escape_string($conn, $uname);
    
        // Retrieve the stored hashed password for the given username
        $sql = "SELECT upass FROM user WHERE uname ='$uname';";
      
        $result = mysqli_query($conn, $sql);
    
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['uname'] =$uname;
            $hashedPassword = $row['upass'];
    
            // Verify the entered password against the hashed password
            if (password_verify($upass, $hashedPassword)) {
                // echo "Login successful!";
                 echo "<script>alert('Login Successfully!')</script>";
                 echo "<script>window.location='../../index2.php'</script>";
            } else {
                // echo "Invalid username or password.";
                echo "<script>alert('Invalid  password')</script>";
                echo "<script>window.location='../signin/signin.html'</script>";
            }
        } else {
            // echo "Invalid username or password.";
            echo "<script>alert('Invalid  User Name')</script>";
            echo "<script>window.location='../signin/signin.html'</script>";
        }
    }
   
    
    // Close the connection
    mysqli_close($conn);

?>