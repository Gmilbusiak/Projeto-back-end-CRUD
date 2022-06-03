<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="icone.jpg"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>Tela - atualizaçaõ</title>
<body>
<?php

    include "conexao.php";
    $id = $_GET['id'] ?? '';
    $sql = "SELECT*FROM cadastro WHERE id = $id";

    $dados = mysqli_query($conn, $sql);

    $linha = mysqli_fetch_assoc($dados);


?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Atualizar cadastro do usuário</h1>
                <form action="update_query.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome'];?>">
                    </div>
                    <div class="form-group">
                        <label for="data_nascimento">Data de nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" required value="<?php echo $linha['data_nascimento'];?>">
                    </div>
                    <div class="form-group">
                        <label for="nome_mae">Nome da Mãe</label>
                        <input type="text" class="form-control" name="nome_mae" required value="<?php echo $linha['nome_mae'];?>">
                    </div>
                    <div class="form-group">
                        <label for="cpf">Cpf</label>
                     <input type="text" class="form-control" name="cpf" required value="<?php echo $linha['cpf'];?>">
                    </div>
                    <div class="form-group">
                        <label for="ende">Endereço</label>
                        <input type="text" class="form-control" name="ende" required value="<?php echo $linha['ende'];?>">
                    </div>
                    <div class="form-group">
                        <label for="usuario">E-mail</label>
                        <input type="text" class="form-control" name="usuario" required value="<?php echo $linha['usuario'];?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success"  value="Salvar Alterações">
                        <input type="hidden" name="id" value="<?php echo $linha['id'];?>">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>
    <a href="INDEX.php" class="btn btn-info">Sair</a>
</body>
    
  </head>
   
</html>






