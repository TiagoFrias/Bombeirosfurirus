<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $data = $_POST['data'];
        $imagem = $_FILES['imagem'];

       
         $insert = mysqli_query($conn,"INSERT INTO noticias
         (n_titulo, n_descricao, n_data, n_imagem)   VALUES ('$titulo','$descricao','$data','$imagem')");
            
            $target_dir = "../img/letest-blog";
            $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["imagem"]["tmp_name"]);
            if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
            } else {
              echo "File is not an image.";
              $uploadOk = 0;
            }
            
        
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php#sizes?size=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php#sizes?size=success");
         }
     
    }
        
?>