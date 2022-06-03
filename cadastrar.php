<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="icone.jpg"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>Tela - Cadastro</title>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro de novo usuário</h1>
                <form action="cadastrar_query.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="data_nascimento">Data de nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" required>
                    </div>
                    <div class="form-group">
                        <label for="nome_mae">Nome da Mãe</label>
                        <input type="text" class="form-control" name="nome_mae" required>
                    </div>
                    <div class="form-group">
                        <label for="cpf">Cpf</label>
                     <input type="text" class="form-control" name="cpf" required>
                    </div>
                    <div class="form-group">
                        <label for="ende">Endereço</label>
                        <input type="text" class="form-control" name="ende" required>
                    </div>
                    <div class="form-group">
                        <label for="usuario">E-mail</label>
                        <input type="text" class="form-control" name="usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Cadastre uma senha</label>
                        <input type="password" class="form-control" name="senha" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="cadastrar">
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






