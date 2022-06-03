<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="icon" type="image/png" href="icone.jpg"/>
    <title>Login  Master</title>
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
                    <form class="form-inline" action="read_query.php" method="POST">
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
                            <th scope="col">Funções</th>
                            

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
                                    <td width=150px>
                                        <a href='update.php?id=$id' class='btn btn-success btn-sm'>Update</a>
                                        <a href='#' class='btn btn-danger btn-sm'data-toggle='modal' data-target='#confirma'
                                        onclick=" .'"' ."pegar_dados($id,'$nome')" .'"' .">Delete</a>
                                        
                                    </td>
                                    
                                </tr>";
                            }

                    ?>
                        


                            

                        
                        
                        </tbody>
                </table>
                <hr>
                    <a href="INDEX.php" class="btn btn-info">Voltar para o início</a>
                
                
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="delete_query.php" method="POST">
        <p>Deseja realmente excluir <b id="nome"></b>?</p>
        <b id="nome"></b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <input type="hidden" name="nome" id="nome1" value="">
        <input type="hidden" name="id" id="id" value="">
        <input type="submit" class="btn btn-danger" value="Sim">
        </form>
    </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    function pegar_dados(id,nome){
        document.getElementById('id').value = id;
        document.getElementById('nome').innerHTML = nome;
        document.getElementById('nome1').value = nome;
    }
    
</script>



  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
    
  </head>
   
</html>






