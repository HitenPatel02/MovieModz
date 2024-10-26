<?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location: pages/signin/signin.html');
    }
    else{
       // header('location: pages\signin\signin.html');
    }
?>