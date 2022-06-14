<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="icone.jpg"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>Área de Login</title>
    </head>
  <body background="antena.jpg">

  <div class="container">
        <div class="row">
          <div class="col-3"></div>
            <div class="col-5">
                <div class="jumbotron">
                <h1 class="display-4"><h1>Seja bem vindo a Telecall</h1>
                <form action="login.php" method="POST">
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
                    include "conexao.php";

                  if(isset($_POST['login'])){
                    $login = mysqli_real_escape_string($conn, $_POST['login']);
                    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
                    
                    $sql = "SELECT*FROM cadastro WHERE usuario = '$login' AND senha = '$senha'";
                    //echo "<br><h6>$sql</h6>";

                    if ($resultado = mysqli_query($conn,$sql)){
                        if ( $num_registros = mysqli_num_rows($resultado)){
                            $linha = mysqli_fetch_assoc($resultado);
                            session_start();
                            $_SESSION['login'] = $login;
                            header("location: verificacao.php");
                        } else{
                            echo "Login inválido!";
                        }
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