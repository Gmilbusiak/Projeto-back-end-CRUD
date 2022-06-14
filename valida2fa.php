<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="icone.jpg"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>"Validação"</title>
</head>
<body>
<?php
                    include "conexao.php";

                    $celular = $_POST['celular'];
                    $nome_mae = $_POST['nome_mae'];
                    $cpf = $_POST['cpf'];
                    
    

                    $sql = "SELECT*FROM cadastro WHERE celular = '$celular' OR nome_mae = '$nome_mae' OR cpf = '$cpf'";

                    if( $resultado = mysqli_query($conn,$sql)){
                        if ($registros = mysqli_num_rows($resultado)){
                            $linha = mysqli_fetch_assoc($resultado);
                            header("location: page2.php");
                        } else{
                            echo "<H1>Validação incorreta! Tente novamente.</H!><hr>
                            <a href='verificacao.php' class='btn btn-info'>Voltar para validação</a> ";
                        }
                    }
                    
                ?>



    
</body>
</html>




