<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>"Delete" de cadastro</title>
</head>
<body>
    


<?php
include_once "conexao.php";
$id = $_POST['id'];
$nome = $_POST['nome'];


$sql ="DELETE FROM 'cadastro'  WHERE id = $id";
    echo "<h1>$nome, Excluído com sucesso!</h1>";


?>
    <hr>
    <a href="INDEX.php" class="btn btn-primary">Sair</a>

    
</body>
</html>

