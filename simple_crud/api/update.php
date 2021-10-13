<?php 

    include('../includes/connection.php');

   // http://localhost/simple_crud/api/update.php?cap_id=1&cap_name=sarvaiya&cap_phone=986543210&cap_email=oms@001gmail.com    
    $cap_id=$_REQUEST['cap_id'];
    $cap_name=$_REQUEST['cap_name'];
    $cap_phone=$_REQUEST['cap_phone'];
    $cap_email=$_REQUEST['cap_email'];

    $sql = "UPDATE quarys SET cap_name='".$cap_name."',cap_phone='".$cap_phone."',cap_email='".$cap_email."'
    WHERE cap_id='".$cap_id."'";
    if(mysqli_query($conn,$sql)){
        echo "updated successfully...";
    }else{
        echo "failed";
    }

?>