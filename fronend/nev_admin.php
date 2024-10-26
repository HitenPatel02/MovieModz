<!-- for pages session -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MoviezModz</title>
        <link rel="stylesheet" href="style.css">
        
        
        <script src="https://kit.fontawesome.com/1e7a3cbc65.js"
            crossorigin="anonymous"></script>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/1e7a3cbc65.js"
            crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">
            <nav>
            <a href="admin.php"><img src="../img/logo.png" class="Logo"></a>
                <ul id="sidemenu">
                    <li><a href="admin.php">Home</a></li>
                    <li><a href="user_list.php">user</a></li>
                    <li><a href="../movies/movie_list.php">Movies</a></li>
                    <li><a href="actor_list.php">Actor</a></li>
                    <li><a href="../movies/movie_list_catagry.php">catagry</a></li>
                    <li><a href="../movies/movie_language_list.php">language</a></li>
                    <!-- <li><a href="../movies/movi_profile_list.php">Movie Profile</a></li> -->
                    <li><a href="cast_profile_movie_list.php">cast_movie</a></li>
                    <li><a href="catagry_profile_movie_list.php">catagry_movie</a></li>
                    <li><a href="slder_list.php">slder_list</a></li>
                    <?php 
                    // require('database.php'); 
                    require('../backend/session_admin.php');
                    require('../backend/db01.php');
                    // $query = mysqli_query($conn, "SELECT * FROM user WHERE uname='$_SESSION[uname]'") or die(mysqli_error());
                    // $fetch = mysqli_fetch_array($query);
                    // echo '<li><a href="user/user_profile_display.php">'.$fetch['uname'].'</a></li>';
                    ?>
                     
                    
                </ul>
                <div>
                    <!-- <a href="pages/singup/user_reg.php" class="signin-button"><button class="btn">Sign up</button></a>
                    <a href="pages/signin/signin.html" class="signin-button"><button class="btn">Sign In</button></a> -->
                    <a href="../backend/logout.php" class="signin-button"><button class="btn">out</button></a>
                </div>
            </nav>
        </div>


