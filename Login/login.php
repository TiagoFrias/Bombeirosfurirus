<?php 
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $conn = new mysqli('localhost','root','','Pap_Login');
    if($conn->connect_error){
        die('Connection Failed: '.$con->connect_error);
    }else{
        $stmt = $conn->prepare("select * from pap_registar where pap_email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['pap_passe'] === $password) {
                echo "Login com sucesso</h2>";

                session_start();
                $_SESSION['id'] = $data['pap_id'];
                $_SESSION['nome'] = $data['pap_nome'];
                $_SESSION['email'] = $data['pap_email'];
                $_SESSION['senha'] = $data['pap_senha'];

                header("Location:../index.php");
                exit;
            }else{
                echo "<h2> Email ou Password inválido!</h2>";
            }
        } else {
            echo "<h2> Email ou Password inválido!</h2>";
        }
    }

?>