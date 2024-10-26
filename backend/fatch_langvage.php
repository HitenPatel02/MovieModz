<?php 
    // $query ="SELECT station FROM Station ";
    require('db01.php');

    $query = "SELECT * FROM m_langvage";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $m_l_options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>

<!-- <select class="yere" name = "L_name">
<option for value="from">fatch_langvage..</option>
       
       <?php 
        //  foreach ($options as $l_option) {
            
        //      echo "<option value = '".$l_option['L_name']."'>" .$l_option['l_id']." - ".$l_option['L_name'].""."</option>";            
        //           }
    ?>
</select> -->