<?php

include('../backend/db01.php');


$m_id = $_POST['m_id'];

// echo "<h1> you are select this id :".$m_id  ;

?>

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
    <h2>Update Movie Id <?php echo $m_id;?></h2>
    <form action="movie_edit_b.php" method="POST" enctype="multipart/form-data">

    <?php
    $query =  "SELECT * FROM movies Where m_id = '$m_id'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result); {
    
    
    ?>

        <input type="hidden" name="m_id" value="<?php echo $m_id;?>">
        <label for="m_name">Movie Name</label>
        <input type="text" id="m_name" name="m_name" value='<?php echo $row["m_name"]; ?>' required>

        <label for="m_t_url">Trailer YouTube URL</label>
        <input type="text" id="m_t_url" name="m_t_url" value="<?php echo $row["m_t_url"]; ?>" required>

        <label for="m_v_url">Movie URL (File or Link /name)</label>
        <input type="text" id="m_v_url" name="m_v_url" value="<?php echo $row["m_v_url"]; ?>" required>

        <label for="m_p_url">Movie Poster</label>

        <img width="50px" src="<?php echo $row['m_p_url'];?>" alt="<?php echo $row['m_id'] ?>">
        <input type="hidden" name="old_m_p_url" value="<?php echo $row['m_p_url']; ?>">

        <input type="file" id="m_p_url" name="m_p_url" accept="image/*"  value ="<?php echo $row['m_p_url'];?>">

        <label for="m_year">Movie Year</label>
        <input type="year" id="m_year" name="m_year" min="1888" max="2024" value="<?php echo $row["m_year"]; ?>"  required>

        <label for="m_time">Movie Duration (in minutes)</label>
        <input type="time" id="m_time" name="m_time" min="1" value="<?php echo $row["m_time"]; ?>"  required>

        <label for="m_dis">Movie Description</label>
        <input type='textarea' id="m_dis" name="m_dis" rows="4" value="<?php echo $row["m_dis"]; ?>"   >

        <input type="submit" value="Update Movie">
    </form>

    <?php

        }
    }
    ?>
</div>
</html>


