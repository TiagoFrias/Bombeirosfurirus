
<?php
    session_start();
    require 'connect/connect.php';
    if (isset($_POST['update']))
    $id = $_SESSION["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = md5($_POST['senha']);
    $novasenha = md5($_POST['novasenha']);

    $sql = "SELECT pap_passe FROM pap_registar WHERE pap_id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($row['pap_passe'] == $senha) {
            $updateSql = "UPDATE pap_registar SET pap_nome='$nome', pap_email='$email', pap_passe='$novasenha' WHERE pap_id='$id'";
            if ($conn->query($updateSql) === TRUE) {
                header("Location:http://localhost/Bombeiros/perfil.php");
                exit;
            } else {
                echo "Erro ao atualizar a senha: " . $conn->error;
            }
        } else {
            echo "Senha atual incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Usuário atualizado com sucesso.";
    } else {
        echo "Erro ao atualizar o usuário: " . $conn->error;
    }

?>
