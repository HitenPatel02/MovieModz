<?php

require('../backend/db01.php');
    // Retrieve and sanitize input data
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $uname = $_POST['aname'];
        $upass = $_POST['apss'];
        session_start();
        if($uname == 'admin'){
            $_SESSION['aname'] = $uname;
                     
            $sql = "SELECT upass FROM user WHERE uname = '$uname';";
            $result = mysqli_query($conn, $sql);
        
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
               
                $hashedPassword = $row['upass'];
                // $_SESSION['uname']=$row['uname'];
                // Verify the entered password against the hashed password
                if (password_verify($upass, $hashedPassword)) {
                    // echo "Login successful!";
                    echo "<script>alert('Login Successfully!')</script>";
                    echo "<script>window.location='admin.php'</script>";
                } else {
                    // echo "Invalid username or password.";
                    echo "<script>alert('Invalid password')</script>";
                echo "<script>window.location='admin_login.php'</script>";
                }
            } else {
                // echo "Invalid username or password.";
                echo "<script>alert('Invalid username or password')</script>";
                echo "<script>window.location='admin_login.php'</script>";
            }
        }else{
            echo "<script>alert('Invalid username or password')</script>";
            echo "<script>window.location='admin_login.php'</script>";
        
        }
       
    }
   
    
    // Close the connection
    mysqli_close($conn);

?>