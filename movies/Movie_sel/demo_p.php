<?php
// Check if the video file exists and serve it
$video_file = '../Movie_uploed/Bigil.mp4'; // Path to your MKV file

// Output the HTML content to display the video player
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play MKV Video</title>
    
    <!-- Simple CSS for styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .video-container {
            width: 80%;
            max-width: 800px;
        }
        video {
            width: 100%;
            height: auto;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="video-container">
        <h1>Watch MKV Video with Audio</h1>

        <!-- HTML5 Video Player -->
        <video controls preload="auto">
            <!-- PHP dynamically serves the MKV file if it exists -->
            <?php if (file_exists($video_file)): ?>
                <source src="<?php echo $video_file; ?>" type="mp4">
                Your browser does not support the video tag or .mkv format.
            <?php else: ?>
                <p>Sorry, the video file does not exist.</p>
            <?php endif; ?>
        </video>
    </div>
</body>
</html>
