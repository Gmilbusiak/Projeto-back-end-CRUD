<?php
session_start();
ob_start();
include_once 'conexão.php';

if((!isset ($_SESSION['id'])) and (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='color: red'>Necessário realizar login para caregar a página!!</p>";
    header("Location: index.php");
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usuário logado com sucesso!! Bem-vindo <?php echo $_SESSION['nome'];?></h1><br>

    <a href="sair.php">Sair</a>
    
</body>
</html>