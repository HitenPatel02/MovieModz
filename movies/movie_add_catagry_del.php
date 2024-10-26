<?php

include('../backend/db01.php');

$id = $_POST['id'];

echo "<h1> you areselect this id :".$id  ;
$query =  "DELETE FROM catagry WHERE id = '$id'";
$result = mysqli_query($conn, $query);
if($result){
    echo "<script>alert('Delete Successfully!')</script>";
    echo "<script>window.location='movie_list_catagry.php'</script>";

}
else{
    echo "<script>alert('Not  Delete!!!')</script>";
    echo "<script>window.location='movie_list_catagry.php'</script>";
}
?>