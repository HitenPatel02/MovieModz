<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catagry List</title>
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
    </style>
</head>
<body>
<?php //require("../fronend/nev_admin.php"); ?>
    <div class="table-container">
        <div class="table-header">
               <h4><a href="../admin/admin.php"><button class="btn-back"   >Home</button></a>  Movie_category List</h4>
               <form action="#" method="post">
                <?php  require("../backend/fach_movies_uplord.php"); ?>
              <select class="yere" name ="m_name">
            <option for value="from">Movie id..</option>
              <?php 
         foreach ($m_options as $m_id_option) {
         echo "<option value = '".$m_id_option['m_name']."'>" .$m_id_option['m_id']." -".$m_id_option['m_name'].""."</option>";            
             }

            ?>
           
</select> <button formaction = 'catagry_profile_movie_list_ser.php'>Serache</button>
              </form> 
               <div class="home"></div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                    <th>id</th>
                    <th>movie catagry</th>
                    <th>movie id </th>
                    <th>move name</th>
         
                    <th><a href="catagry_profile_movie_add.php"><button class="btn-add"  formaction = 'catagry_profile_movie_add.php' >Add</button></a></th>
                    
                    <!-- <th>Manage</th> -->
                </tr>
            </thead>
            <tbody>
          
                <?php
                

                    require("../backend/db01.php");
                    $query =  "SELECT * FROM catagry_profile_movie_list";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                    
                    
                    ?>
                    
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["m_catagry"]; ?></td>
                    <td><?php echo $row["m_id"]; ?></td>
                    <td><?php echo $row["m_name"]; ?></td>
                    	
             
                
                    <td>
                        <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <!-- <button class="btn-edit"  >Edit</button> -->
                        
                        <button class="btn-delete" formaction = 'catagry_profile_movie_del.php' >Delete</button>
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
