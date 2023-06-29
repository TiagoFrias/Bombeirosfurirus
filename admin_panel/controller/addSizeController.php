<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $data = $_POST['data'];
        $imagem = $_FILES['imagem'];

       
            
            $filename = $_FILES["imagem"]["name"];
            $tempname = $_FILES["imagem"]["tmp_name"];
            $folder = "../../img/letest-blog/" . $filename;

            $insert = mysqli_query($conn,"INSERT INTO noticias(n_titulo, n_descricao, n_data, n_imagem)   VALUES ('$titulo','$descricao','$data','$filename')");
            
            if (move_uploaded_file($tempname, $folder)) {
              header("Location: http://localhost/Bombeiros/admin_panel/#sizes");
              exit;
            } else {
              echo mysqli_error($conn);
              exit;
            }
     
    }
        
?>