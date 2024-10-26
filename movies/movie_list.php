<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .table-container {
            margin: 50px auto;
            width: 80%;
        }
        .table-header {
            background-color: #2E3440;
            color: white;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .table {
            background-color: white;
            border-radius: 10px;
        }
        .btn-edit {
            background-color: #1E90FF;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
        }
        .btn-delete {
            background-color: #FF6347;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;


            
        }
        .btn-add {
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;


            
        }
        .btn-back {
            background-color: orange;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;


            
        }
        . . .
img {
  border: 2px solid red;
  border-radius: 8px;
  width: 50px;
}
    </style>
</head>
<body>

    <div class="table-container">
        <div class="table-header">
               <h4><a href="../admin/admin.php"><button class="btn-back"   >Home</button></a>  Movie List</h4>
               <div class="home"></div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                    <th> m name id</th>
                    <th>Movie Name</th>
                    <th>Movie Trailer url</th>
                    <th>Movie file url</th>
                    <th>Movie poster</th>
                    <th>Movie year</th>
                    <th>Movie time</th>
                    <th>Movie discription</th>
                    <th><a href="movie_add.php"><button class="btn-add"  formaction = 'add_actor.php' >Add</button></a></th>
                    
                    <!-- <th>Manage</th> -->
                </tr>
            </thead>
            <tbody>
          
                <?php
                

                    require("../backend/db01.php");
                    $query =  "SELECT * FROM movies";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                    
                    
                    ?>
                    
                <tr>
                    <td><?php echo $row["m_id"]; ?></td>
                    <td><?php echo $row["m_name"]; ?></td>
                    <td><?php echo $row["m_t_url"]; ?></td>
                    <td><?php echo $row["m_v_url"]; ?></td>
                    <td><?php echo $row["m_p_url"]; ?><t/d>
                    <td><?php echo $row["m_year"]; ?></td>
                    <td><?php echo $row["m_time"]; ?></td>
                    <td><?php echo $row["m_dis"]; ?></td>

                    
                    <td><img width="50px" src="<?php echo $row['m_p_url'];?>" alt="<?php echo $row['m_id'] ?>"></td>
                    <td>
                        <form action="" method="post">
                        <input type="hidden" name="m_id" value="<?php echo $row['m_id'];?>">
                        <button class="btn-edit" formaction = 'movie_edit.php'  >Edit</button>
                        
                        <button class="btn-delete" formaction = 'movie_del.php' >Delete</button>
                        </form>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
                <?php
}
} else {
    echo "0 results";
//    echo " <a href='u_edit_profile.php' ><button>edit profile</button></a>";
}

   
   
   
 mysqli_close($conn);
 ?>
            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
