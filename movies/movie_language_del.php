<?php

include('../backend/db01.php');

$id = $_POST['l_id'];

echo "<h1> you areselect this id :".$id  ;
$query =  "DELETE FROM m_langvage WHERE l_id = '$id'";
$result = mysqli_query($conn, $query);
if($result){
    echo "<script>alert('Delete Successfully!')</script>";
    echo "<script>window.location='movie_language_list.php'</script>";

}
else{
    echo "<script>alert('Not  Delete!!!')</script>";
    echo "<script>window.location='movie_language_list.php'</script>";
}
?>