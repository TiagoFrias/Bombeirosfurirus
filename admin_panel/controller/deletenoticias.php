<?php

    include_once "../config/dbconnect.php";

    if (isset($_GET["idnoticia"])) {
        $id=$_GET["idnoticia"];
        $query="DELETE FROM noticias where n_id='$id'";
    
        $data=mysqli_query($conn,$query);
        header("Location: http://localhost/Bombeiros/admin_panel/index.php?size=success#sizes");
    }


?>