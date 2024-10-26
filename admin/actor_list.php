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
<?php require("../fronend/nev_admin.php"); ?>
    <div class="table-container">
        <div class="table-header">
               <h4><a href="admin.php"><button class="btn-back"   >Home</button></a>  Actor List</h4>
               <div class="home"></div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                    <th>id</th>
                    <th>actor Name</th>
                    <th>actor age</th>
                    <th>actor Gender</th>
                    <th>actor dob</th>
                    <th>img usrl</th>
                    <th>img</th>
                    <th><a href="add_actor.php"><button class="btn-add"  formaction = 'add_actor.php' >Add</button></a></th>
                    
                    <!-- <th>Manage</th> -->
                </tr>
            </thead>
            <tbody>
          
                <?php
                

                    require("../backend/db01.php");
                    $query =  "SELECT * FROM actors";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                    
                    
                    ?>
                    
                <tr>
                    <td><?php echo $row["a_id"]; ?></td>
                    <td><?php echo $row["a_name"]; ?></td>
                    <td><?php echo $row["a_age"]; ?></td>
                    <td><?php echo $row["a_gender"]; ?></td>
                    <td><?php echo $row["a_dob"]; ?><t/d>
                    <td><?php echo $row["a_img_url"]; ?></td>
                    
                    <td><img width="50px" src="<?php echo $row['a_img_url'];?>" alt="<?php echo $row['a_id'] ?>"></td>
                    <td>
                        <form action="" method="post">
                        <input type="hidden" name="uid" value="<?php echo $row['a_id'];?>">
                        <button class="btn-edit" formaction='add_actor_edit.php'>Edit</button>
                        
                        <button class="btn-delete" formaction = 'add_actor_del_.php' >Delete</button>
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
