<!-- <?php 
    // $query ="SELECT station FROM Station ";
    require('db01.php');

    $query = "SELECT * FROM catagry";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $m_c_options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>

<select class="yere" name = "m_catagry">
<option for value="from">m_catagry..</option>
       
       <?php 
        //  foreach ($options as $c_option) {
            
        //      echo "<option value = '".$c_option['m_catagry']."'>" .$c_option['id']." - ".$c_option['m_catagry'].""."</option>";            
        //           }
    ?>
</select> -->