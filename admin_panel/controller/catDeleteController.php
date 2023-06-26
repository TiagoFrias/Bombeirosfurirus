<?php

    include_once "../config/dbconnect.php";
    
    $u_id=$_POST['record'];
    $query="DELETE FROM pap_registar where pap_id='$u_id'";

    $data=mysqli_query($conn,$query);
?>