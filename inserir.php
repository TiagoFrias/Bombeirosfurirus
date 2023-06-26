<?php
// Dados de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Pap_Login";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenção dos valores do formulário
    $nome = $_POST["r_nome"];
    $dataNascimento = $_POST["r_data"];
    $cartaConducao = $_POST["r_carta"];
    $genero = $_POST["r_genero"];
    $contactoTelefonico = $_POST["r_telefone"];
    $email = $_POST["r_email"];
    $rua = $_POST["r_morada"];
    $codigoPostal = $_POST["r_postal"];

    // Preparação e execução da consulta SQL para inserir os dados
    $sql = "INSERT INTO recrutamento (r_nome, r_data, r_carta, r_genero, r_telefone, r_email, r_morada, r_postal) VALUES ('$nome', '$dataNascimento', '$cartaConducao', '$genero', '$contactoTelefonico', '$email', '$rua', '$codigoPostal')";

    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost:8080/Bombeiros/recrutamento.php");
    } else {
        echo "Erro ao inserir os dados: " . $conn->error;
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
