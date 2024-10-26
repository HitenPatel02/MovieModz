<?php

include('../backend/db01.php');

$uid = $_POST['uid'];

echo "<h1> you areselect this id :".$uid  ;
$query =  "DELETE FROM actors WHERE a_id = $uid";
$result = mysqli_query($conn, $query);
if($result){
    echo "<script>alert('Delete Successfully!')</script>";
    echo "<script>window.location='actor_list.php'</script>";

}
else{
    echo "<script>alert('Not  Successfully!')</script>";
    echo "<script>window.location='actor_list.php'</script>";
}
?>