<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Actor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .actor-form-container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px;
            border-radius: 10px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            color: #333;
            margin-bottom: 5px;
        }
        .form-group input, 
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .success, .error {
            text-align: center;
            margin-top: 10px;
            padding: 10px;
            font-size: 14px;
        }
        .success {
            color: #28a745;
        }
        .error {
            color: #dc3545;
        }
    </style>
</head>
<body>

<div class="actor-form-container">
    <h2>Add Actor</h2>
    <form action="slides_add_b.php" method="POST" enctype="multipart/form-data">
     

            <?php 
        include('../backend/fach_movie.php');

        
            ?>
<select class="yere" name ="caption">
<option for value="from">caption..</option>
       
       <?php 
         foreach ($options as $option) {
            
             echo "<option value = '".$option['m_name']."'>" .$option['m_id']." -".$option['m_name'].""."</option>";            
                  }
    ?>
</select>

<br>

<select class="yere" name ="image_path">
<option for value="from">image_path..</option>
       
       <?php 
         foreach ($options as $option) {
            
             echo "<option value = '".$option['m_p_url']."'>" .$option['m_id']." -".$option['m_p_url'].""."</option>";            
                  }
    ?>
</select>
        <button type="submit">Add Actor</button>
    </form>
</div>

</body>
</html>
