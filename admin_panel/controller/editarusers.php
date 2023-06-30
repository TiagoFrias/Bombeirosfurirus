<?php
include_once "../config/dbconnect.php";

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verifica se o formulário foi enviado
if(isset($_POST['editar'])){
    $id = $_POST['id'];
    $novoNome = $_POST['nome'];
    $novoEmail = $_POST['email'];

    // Atualiza o usuário no banco de dados
    $sql = "UPDATE pap_registar SET nome='$novoNome', email='$novoEmail' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário atualizado com sucesso.";
    } else {
        echo "Erro ao atualizar o usuário: " . $conn->error;
    }
}

// Obtém o usuário a ser editado
$id = $_GET['id'];

// Consulta o usuário no banco de dados
$sql = "SELECT * FROM pap_registar WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nome = $row['nome'];
    $email = $row['email'];

    // Exibe o formulário de edição
    echo "
    <form method='post' action=''>
        <input type='hidden' name='id' value='$id'>
        <label>Nome:</label>
        <input type='text' name='nome' value='$nome'><br><br>
        <label>Email:</label>
        <input type='text' name='email' value='$email'><br><br>
        <input type='submit' name='editar' value='Editar'>
    </form>";
} else {
    echo "Usuário não encontrado.";
}

$conn->close();
?>
