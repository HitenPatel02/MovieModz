<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movie Category</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <?php

$id = $_POST['l_id'];
require("../backend/db01.php");
$query =  "SELECT * FROM m_langvage where l_id = '$id'" ;
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);




    ?>

<div class="container">
    <h2>Update Movie langvage id <?php echo $id;?></h2>
    <form action="movie_language_edit_b.php" method="post">
        <label for="m_category">Movie Category</label>
        <input type="text" id="m_category" name="L_name" value="<?php echo $row['L_name'];?>"  >
        <input type="hidden" name="id" value="<?php echo $row['l_id'];?>">
        <input type="submit" value="Update Category">
    </form>
</div>
<?php
    }?>
</body>
</html>
