
<?php
    session_start();
    require 'connect/connect.php';
    if (isset($_POST['update']))
    $id = $_SESSION["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST['senha'];
    $novasenha = $_POST['novasenha'];

    $sql = "SELECT pap_passe FROM pap_registar WHERE pap_id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        print_r($row);
        $senhaAtual = $row['pap_passe'];
        $checkpassword = password_verify($senha, $senhaAtual);
        if ($checkpassword === TRUE) {
            $novasenha = password_hash($novasenha);
            $updateSql = "UPDATE Pap_Login SET pap_nome='$nome', pap_email='$email', pap_passe='$novasenha' WHERE pap_id='$id'";
            if ($conn->query($updateSql) === TRUE) {
                echo "Senha atualizada com sucesso.";
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
