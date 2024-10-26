<?php
require("../backend/db01.php");

if (isset($_GET['id'])) {
    $movie_id = $_GET['id'];
    $query = "SELECT * FROM movies WHERE m_id = $movie_id";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $m_name = $row['m_name'];
        $m_t_url = $row['m_t_url'];  // This is the YouTube link (e.g. https://www.youtube.com/watch?v=VIDEO_ID)
        $m_v_url = $row['m_v_url'];
        $m_p_url = $row['m_p_url'];
        $m_year = $row['m_year'];
        $m_time = $row['m_time'];
        $m_dis = $row['m_dis'];

        // Convert YouTube link to embeddable format if it's a YouTube URL
        if (strpos($m_t_url, 'youtube.com') !== false) {
            parse_str(parse_url($m_t_url, PHP_URL_QUERY), $youtube_params);
            $video_id = $youtube_params['v']; // Extract video ID
            $embed_url = "https://www.youtube.com/embed/$video_id";
        } else {
            $embed_url = $m_t_url; // Use the original link if it's not YouTube
        }
    } else {
        echo "Movie not found!";
        exit();
    }
} else {
    echo "No movie selected!";
    exit();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $m_name; ?> - Movie Play</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">  <!-- Your CSS -->
</head>
<body>
    <div class="container">
        <div class="movie-info">
            <h1><?php echo $m_name; ?></h1>
            <img class="movie-poster" src="<?php echo $m_p_url; ?>" alt="<?php echo $m_name; ?>">
            <p><strong>Year:</strong> <?php echo $m_year; ?> | <strong>Duration:</strong> <?php echo $m_time; ?></p>
        </div>

        <div class="movie-trailer">
            <h2>Watch Trailer</h2>
            <!-- Embed the YouTube or trailer link -->
            <iframe src="<?php echo $embed_url; ?>" allowfullscreen></iframe>
        </div>

        <div class="movie-file">
            <h2>Watch Movie</h2>
            <video controls>
                <source src="<?php echo $m_v_url; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="description">
            <h3>Movie Description</h3>
            <p><?php echo $m_dis; ?></p>
        </div>

        <a href="movie_list.php"><button class="btn-back">Back to Movie List</button></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
