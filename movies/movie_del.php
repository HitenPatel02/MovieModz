<?php

include('../backend/db01.php');

$uid = $_POST['m_id'];

echo "<h1> you areselect this id :".$uid  ;
$query =  "DELETE FROM movies WHERE m_id = $uid";
$result = mysqli_query($conn, $query);
if($result){
    echo "<script>alert('Delete Successfully!')</script>";
    echo "<script>window.location='movie_list.php'</script>";

}
else{
    echo "<script>alert('Not  Successfully!')</script>";
    echo "<script>window.location='movie_list.php'</script>";echo "<script>window.location='movie_list.php'</script>";
}
?>