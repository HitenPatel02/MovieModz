<?php

include('../backend/db01.php');

$uid = $_POST['uid'];

echo "<h1> you areselect this id :".$uid  ;
$query =  "DELETE FROM user WHERE `user`.`u_id` = $uid";
$result = mysqli_query($conn, $query);
if($result){
    echo "<script>alert('Delete Successfully!')</script>";
    echo "<script>window.location='user_list.php'</script>";

}
else{
    echo "<script>alert('Not  Successfully!')</script>";
    echo "<script>window.location='user_list.php'</script>";
}
?>