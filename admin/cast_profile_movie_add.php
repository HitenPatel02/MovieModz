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

<div class="container">
    <h2>Add Movie profile</h2>
    <form action="cast_profile_movie_add_b.php" method="post">
        <!-- <label for="m_category">Movie Category</label>
        <input type="text" id="m_category" name="m_category" placeholder="Enter category" required> -->
        <?php 
        require("../backend/fach_movies_uplord.php");
        require("../backend/fach_actors.php");
        // require("../backend/fatch_catagry.php");
        // require("../backend/fatch_langvage.php");
        // require("../backend/fach_movies_uplord.php");
        ?>


<!-- id -->

<!---move name-->



<!-- id -->
<select class="yere" name ="a_name">
<option for value="from">Acter Name</option>
              <?php 
         foreach ($a_options as $a_name_option) {
         echo "<option value = '".$a_name_option['a_name']."'>" .$a_name_option['a_name']."</option>";            
             }

    ?>
</select><br>
<!-- m_catagary -->

<select class="yere" name ="m_name">
<option for value="from">Movie Name..</option>
              <?php 
         foreach ($m_options as $m_name_option) {
         echo "<option value = '".$m_name_option['m_name']."'>" .$m_name_option['m_id']." -".$m_name_option['m_name'].""."</option>";            
             }

    ?>
</select><br>
<!-- m_catagary -->





        <input type="submit" value="Add Category">
    </form>


</div>

</body>
</html>
