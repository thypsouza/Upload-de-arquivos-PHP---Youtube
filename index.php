<?php

    if(isset($_POST['salvar'])){
        $pasta  = "teste/";
        $arquivo = $_FILES['file']['name'];
        $extensao = '.'.pathinfo($arquivo)['extension'];
        $novo_nome = time().$extensao;
     
        if(move_uploaded_file($_FILES['file']['tmp_name'] ,$pasta.$novo_nome)){
            echo "Upload realizado com sucesso";
        }else{
            echo "erro de upload";
        }

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" class="form-control mt-5">
            <input type="submit" class="btn btn-primary mt-5" name="salvar" value="salvar">
        </form>
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>