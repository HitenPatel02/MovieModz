<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="url"], input[type="file"], input[type="number"], textarea {
            width: 100%;
            padding: 8px;
            margin: 8px 0 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        textarea {
            resize: vertical;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Add New Movie</h2>
    <form action="movie_add_b.php" method="POST" enctype="multipart/form-data">
        <label for="m_name">Movie Name</label>
        <input type="text" id="m_name" name="m_name" required>

        <label for="m_t_url">Trailer YouTube URL</label>
        <input type="text" id="m_t_url" name="m_t_url" placeholder="https://youtube.com/..." required>

        <label for="m_v_url">Movie URL (File or Link)</label>
        <input type="text" id="m_v_url" name="m_v_url" placeholder="https://linktomovie.com" required>

        <label for="m_p_url">Movie Poster</label>
        <input type="file" id="m_p_url" name="m_p_url" accept="image/*" required>

        <label for="m_year">Movie Year</label>
        <input type="year" id="m_year" name="m_year" min="1888" max="2024" required>

        <label for="m_time">Movie Duration (in minutes)</label>
        <input type="time" id="m_time" name="m_time" min="1" required>

        <label for="m_dis">Movie Description</label>
        <textarea id="m_dis" name="m_dis" rows="4" required></textarea>

        <input type="submit" value="Add Movie">
    </form>
</div>

</body>
</html>
