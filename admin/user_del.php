<?php

include('../backend/db01.php');

$uid = $_POST['uid'];

echo "<h1> you are select this id :".$uid  ;


?>

<form action="" method="post">
                        <input type="hidden" name="uid" value="<?php echo $uid;?>">
                        <button class="btn-edit" formaction = 'user_list.php' >back</button></a> 

                        <button class="btn-delete" formaction = 'user_conf_del.php'>Delete</button>
</form>



