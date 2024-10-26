<?php
    session_start();
    if(!ISSET($_SESSION['aname'])){
        header('location: admin_login.php');
    }
    else{
       // header('location: pages\signin\signin.html');
    }
?>