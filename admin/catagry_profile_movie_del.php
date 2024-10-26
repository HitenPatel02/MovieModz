<?php

include('../backend/db01.php');

$uid = $_POST['id'];

echo "<h1> you areselect this id :".$uid  ;
$query =  "DELETE FROM catagry_profile_movie_list WHERE id = $uid";
$result = mysqli_query($conn, $query);
if($result){
    echo "<script>alert('Delete Successfully!')</script>";
    echo "<script>window.location='catagry_profile_movie_list.php'</script>";

}
else{
    echo "<script>alert('Not  Successfully!')</script>";
    echo "<script>window.location='catagry_profile_movie_list.php'</script>";
}
?>