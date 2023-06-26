<?php

    include_once "../config/dbconnect.php";
    
    $r_id=$_POST['record'];
    $query="DELETE FROM recrutamento where r_id='$r_id'";

    $data=mysqli_query($conn,$query);
    
?>