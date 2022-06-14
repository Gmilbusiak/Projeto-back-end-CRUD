<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="icone.jpg"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>Login Master</title>
    </head>
  <body background="antena.jpg">

  <div class="container">
        <div class="row">
          <div class="col-3"></div>
            <div class="col-5">
                <div class="jumbotron">
                <h1 class="display-4"><h1>Seja bem vindo a Telecall</h1>
                <form action="loginMaster.php" method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Login</label>
                    <input type="text" class="form-control" name="login">
                    <small class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" name="senha">
                  </div>
                      <button type="submit" class="btn btn-primary">Acessar</button>
                      <a href="INDEX.php" class="btn btn-info">Voltar para o início</a>
                </form>

                <?php

                  if(isset($_POST['login'])){
                    $login = $_POST['login'];
                    $senha = $_POST['senha'];
                  if (($login == "admin@gmail.com") and ($senha == "admin")){                   
                    session_start();
                    $_SESSION['login'] = "Gabriel";
                    header("location: read.php");
                  }else{
                    echo"Erro de Login!";

                  }
                }
                ?>
              </div>    
            </div>
            <div class="col-5"></div>
        </div>
    </div>


   
  </body>
</html>