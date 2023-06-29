<?php

    include_once "../config/dbconnect.php";

    if (isset($_GET["idrecruta"])) {
        $id=$_GET["idrecruta"];
        $query="DELETE FROM recrutamento where r_id='$id'";
    
        $data=mysqli_query($conn,$query);
        header("Location: http://localhost/Bombeiros/admin_panel/index.php#category");
    }


?>