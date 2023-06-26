<?php

    include_once "../config/dbconnect.php";

    if (isset($_GET["idutilizador"])) {
        $id=$_GET["idutilizador"];
        $query="DELETE FROM pap_registar where pap_id='$id'";
    
        $data=mysqli_query($conn,$query);
        header("Location: http://localhost:8080/Bombeiros/admin_panel/index.php#customers");
    }


?>