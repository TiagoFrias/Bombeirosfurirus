<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $conn = new mysqli('localhost','root','','Pap_Login');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }else{
        $tipo = 1;
        $stmt = $conn->prepare("insert into pap_registar(pap_nome, pap_email, pap_tipo, pap_passe) values(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$name, $email, $tipo, $password);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    header("Location: registration.php");
?>