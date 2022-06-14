<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="icon" type="image/png" href="icone.jpg"/>
    <title>Login - Master</title>
<body>
    <?php
       
            $pesquisa = $_POST['busca'] ?? '';
            include "conexao.php";

            $sql = "SELECT * FROM cadastro WHERE nome LIKE '%$pesquisa%'";
            $dados = mysqli_query($conn, $sql);

    ?>
      <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" action="read.php" method="POST">
                        <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Pesquisar" name="busca" autofocus>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                </nav>  
                <table class="table table-hover">
                     <thead>
                         <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Data de nascimento</th>
                            <th scope="col">Nome da mãe</th>
                            <th scope="col">Cpf</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">E-mail</th>
                        </tr>
                    </thead>
                     <tbody>
                     <?php

                         while ($linha = mysqli_fetch_assoc($dados)){
                             $id = $linha['id'];
                             $nome = $linha['nome'];
                             $data_nascimento = $linha['data_nascimento'];
                             $nome_mae = $linha['nome_mae'];
                             $cpf = $linha['cpf'];
                             $ende = $linha['ende'];
                             $usuario = $linha['usuario'];

                                
                            echo "<tr>
                                    <th scope='row'>$nome</th>
                                    <td>$data_nascimento</td>
                                    <td>$nome_mae </td>
                                    <td>$cpf </td>
                                    <td>$ende </td>
                                    <td>$usuario </td>
                                </tr>";
                            }

                    ?>

                        
                        
                        </tbody>
                </table>
                
                
            </div>
        </div>
    </div>

    <hr>
    <a href="INDEX.php" class="btn btn-info">Voltar para o início</a>
</body>
    
  </head>
   
</html>






