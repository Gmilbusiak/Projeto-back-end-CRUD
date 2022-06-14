<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="icone.jpg"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>Alteração de cadastro</title>
</head>
<body>

<?php
    include_once "conexao.php";
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $nome_mae = $_POST['nome_mae'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['celular'];
    $ende = $_POST['ende'];
    $usuario = $_POST['usuario'];

    $sql = "UPDATE cadastro SET nome = '$nome',data_nascimento = '$data_nascimento',nome_mae = '$nome_mae',cpf = '$cpf',celular = '$celular',ende = '$ende',usuario = '$usuario'
        WHERE id = $id";
    $resulado=mysqli_query($conn,$sql);
        echo "<h1>$nome, seu cadastro foi atualizado com sucesso!</h1>";


?>
    <hr>
    <a href="read.php" class="btn btn-primary">Sair</a>

    
</body>
</html>

