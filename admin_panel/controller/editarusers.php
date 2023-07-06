<?php
include_once "../config/dbconnect.php";

if(isset($_POST['upload'])){
    $id = $_POST['pap_id'];
    $novoNome = $_POST['pap_nome'];
    $novoEmail = $_POST['pap_email'];
    $novoTipo = $_POST['pap_tipo'];

        $sql = "UPDATE pap_registar SET pap_nome='$novoNome', pap_email='$novoEmail', pap_tipo='$novoTipo' WHERE pap_id='$id'";
        if ($conn->query($sql) === TRUE) {
            header("Location:http://localhost/Bombeiros/admin_panel/index.php");
                    exit;
        } else {
            echo "Erro ao atualizar o usuário: " . $conn->error;
        }

}


$conn->close();
?>
