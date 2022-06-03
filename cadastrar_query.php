
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
    


<?php
include_once "conexao.php";

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$nome_mae = $_POST['nome_mae'];
$cpf = $_POST['cpf'];
$ende = $_POST['ende'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = mysqli_query($conn,"INSERT INTO cadastro (nome,data_nascimento,nome_mae,cpf,ende,usuario,senha)
        VALUES ('$nome','$data_nascimento','$nome_mae','$cpf','$ende','$usuario','$senha')");
    echo "<h1>$nome, seu cadastro foi efetuado com Sucesso!</h1>";

  


?>
    <hr>
    <a href="INDEX.php" class="btn btn-primary">Sair</a>

    
</body>
</html>

