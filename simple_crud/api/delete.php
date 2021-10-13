<?php

include('../includes/connection.php');

$cap_id=$_REQUEST['cap_id'];

$sql="DELETE FROM quarys WHERE cap_id=".$cap_id;
if(mysqli_query($conn,$sql)){
    echo "deleted successfully...";
}else{
    echo "failed";
}

?>