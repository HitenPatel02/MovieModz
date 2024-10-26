<?php 
    // $query ="SELECT station FROM Station ";
    require('db01.php');

    $query = "SELECT * FROM `movies`";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $m_options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
<!-- <select class="yere" name ="m_id">
<option for value="from">movies..</option>
       
       <?php 
    //      foreach ($options as $option) {
            
    //          echo "<option value = '".$option['m_id']."'>" .$option['m_id']." -".$option['m_name'].""."</option>";            
    //               }
    // ?>
</select>

<select class="yere" name ="m_name">
<option for value="from">movies..</option>
       
       <?php 
        //  foreach ($options as $option) {
            
        //      echo "<option value = '".$option['m_name']."'>" .$option['m_name']." -".$option['m_id'].""."</option>";            
        //           }
    ?>
</select> -->


