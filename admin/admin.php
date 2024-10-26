<?php
// require("../fronend/nev_admin.php");


?>
<?php
// Include session and database connection
// require('../backend/session_admin.php');
require('../backend/db01.php');

// Example SQL queries (adjust these based on your database structure)
$userCountQuery = "SELECT COUNT(*) as count FROM user";
$movieCountQuery = "SELECT COUNT(*) as count FROM movies";
$actorCountQuery = "SELECT COUNT(*) as count FROM actors";
$categoryCountQuery = "SELECT COUNT(*) as count FROM catagry";
$languageCountQuery = "SELECT COUNT(*) as count FROM m_langvage";
$movieProfileCountQuery = "SELECT COUNT(*) as count FROM moves_profile";
$castCountQuery = "SELECT COUNT(*) as count FROM cast_profile_movie_list";
$catagryCountQuery = "SELECT COUNT(*) as count FROM catagry_profile_movie_list";
$sliderCountQuery = "SELECT COUNT(*) as count FROM slides";

// Execute queries
$userCountResult = mysqli_fetch_assoc(mysqli_query($conn, $userCountQuery));
$movieCountResult = mysqli_fetch_assoc(mysqli_query($conn, $movieCountQuery));
$actorCountResult = mysqli_fetch_assoc(mysqli_query($conn, $actorCountQuery));
$categoryCountResult = mysqli_fetch_assoc(mysqli_query($conn, $categoryCountQuery));
$languageCountResult = mysqli_fetch_assoc(mysqli_query($conn, $languageCountQuery));
$movieProfileCountResult = mysqli_fetch_assoc(mysqli_query($conn, $movieProfileCountQuery));
$castCountResult = mysqli_fetch_assoc(mysqli_query($conn, $castCountQuery));
$catagryCountQuery = mysqli_fetch_assoc(mysqli_query($conn, $catagryCountQuery));
$sliderCountResult = mysqli_fetch_assoc(mysqli_query($conn, $sliderCountQuery));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
    <!-- <link rel="stylesheet" href="../style.css"> -->
</head>
<body>
    <header>
        <nav>
            <a href="admin.php"><img src="../img/logo.png" class="logo" alt="MoviezModz Logo"></a>
            <ul id="sidemenu">
                <li><a href="admin.php">Home</a></li>
                <li><a href="user_list.php">Users</a></li>
                <li><a href="../movies/movie_list.php">Movies</a></li>
                <li><a href="actor_list.php">Actors</a></li>
                <li><a href="../movies/movie_list_catagry.php">Categories</a></li>
                <li><a href="../movies/movie_language_list.php">Languages</a></li>
                <!-- <li><a href="../movies/movi_profile_list.php">Movie Profiles</a></li> -->
                <li><a href="cast_profile_movie_list.php">Movie Cast</a></li>
                <li><a href="catagry_profile_movie_list.php">movie catagry </a></li>
                <li><a href="slder_list.php">Slider List</a></li>
            </ul>
            <div class="auth-buttons">
                <a href="../backend/logout.php"><button class="btn">Logout</button></a>
            </div>
        </nav>
    </header>

    <div class="dashboard">
        <div class="card">
            <!-- <h2><a href="user_list.php">Users</a></h2> -->
            <h2><a href="user_list.php"><i class="fas fa-users"></i> Users</a></h2>
            <p>Total: <?php echo $userCountResult['count']; ?></p>
        </div>
        <div class="card">
            <h2><a href="../movies/movie_list.php">Movies</h2>
            <p>Total: <?php echo $movieCountResult['count']; ?></a></p>
        </div>
        <div class="card">
            <h2><a href="actor_list.php">Actors</a></h2>
            <p>Total: <?php echo $actorCountResult['count']; ?></p>
        </div>
        <div class="card">
            <h2><a href="../movies/movie_list_catagry.php">Categories</a></h2>
            <p>Total: <?php echo $categoryCountResult['count']; ?></p>
        </div>
        <div class="card">
            <h2><a href="../movies/movie_language_list.php">Languages</a></h2>
            <p>Total: <?php echo $languageCountResult['count']; ?></p>
        </div>
        <!-- <div class="card">
            <h2><a href="../movies/movi_profile_list.php">Movie Profiles</a></h2>
            <p>Total: <?php //echo $movieProfileCountResult['count']; ?></p>
        </div> -->
        <div class="card">
            <h2><a href="cast_profile_movie_list.php">Movie Cast</a></h2>
            <p>Total: <?php echo $castCountResult['count']; ?></p>
        </div>
        <div class="card">
            <h2><a href="catagry_profile_movie_list.php">movie catagry</a></h2>
            <p>Total: <?php echo $catagryCountQuery['count']; ?></p>
        </div>
        <div class="card">
            <h2><a href="slder_list.php">Slider List</a></h2>
            <p>Total: <?php echo $sliderCountResult['count']; ?></p>
        </div>
    </div>
</body>
</html>
