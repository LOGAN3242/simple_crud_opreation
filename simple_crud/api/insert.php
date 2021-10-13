<?php
    include('../includes/connection.php');

    $cap_name=$_REQUEST['cap_name'];
    $cap_phone=$_REQUEST['cap_phone'];
    $cap_email=$_REQUEST['cap_email'];

    $sql = "INSERT INTO quarys SET cap_name='".$cap_name."',cap_phone='".$cap_phone."',cap_email='".$cap_email."'";
    if(mysqli_query($conn,$sql))
    {
        echo"insert successfully";
    }else{
        echo"failed";
    }

?>