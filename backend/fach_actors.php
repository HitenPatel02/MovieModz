<?php 
    // $query ="SELECT station FROM Station ";
    require('db01.php');

    $query = "SELECT * FROM `actors`";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $a_options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>

