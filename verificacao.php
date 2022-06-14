<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="icone.jpg"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>Confirmação de dados</title>
    </head>
  <body background="antena.jpg">
    <?php

        $roleta=rand(1,3);

           switch($roleta):
            case 1:
                echo"<div class='container'>";
                echo"<div class='row'>";
                echo"<div class='col-3'></div>";
                echo"<div class='col-5'>";
                echo"<div class='jumbotron'>";
                echo"<h1 class='display-4'><h1>Confirme seus dados para realizar o login!</h1>";
                echo"<form action='valida2fa.php' method='POST'>";
                echo"<div class='form-group'>";
                echo"<label for='exampleInputEmail1'>Celular</label>";
                echo"<input type='text' class='form-control' name='celular'>";
                echo"</div>";
                echo"<button type='submit' class='btn btn-primary'>Acessar</button>";
                echo"</form>";
                echo"</div> " ;  
                echo"</div>";
                echo"<div class='col-5'></div>";
                echo"</div>";
                echo"</div>";
        
        
               break; 
               case 2:
                echo"<div class='container'>";
                echo"<div class='row'>";
                echo"<div class='col-3'></div>";
                echo"<div class='col-5'>";
                echo"<div class='jumbotron'>";
                echo"<h1 class='display-4'><h1>Confirme seus dados para realizar o login!</h1>";
                echo"<form action='valida2fa.php' method='POST'>";
                echo"<div class='form-group'>";
                echo"<label for='exampleInputEmail1'>Nome mãe</label>";
                echo"<input type='text' class='form-control' name='nome_mae'>";
                echo"</div>";
                echo"<button type='submit' class='btn btn-primary'>Acessar</button>";
                echo"</form>";
                echo"</div> " ;  
                echo"</div>";
                echo"<div class='col-5'></div>";
                echo"</div>";
                echo"</div>";
        
        
               break; 
               case 3:
                echo"<div class='container'>";
                echo"<div class='row'>";
                echo"<div class='col-3'></div>";
                echo"<div class='col-5'>";
                echo"<div class='jumbotron'>";
                echo"<h1 class='display-4'><h1>Confirme seus dados para realizar o login!</h1>";
                echo"<form action='valida2fa.php' method='POST'>";
                echo"<div class='form-group'>";
                echo"<label for='exampleInputEmail1'>Cpf</label>";
                echo"<input type='text' class='form-control' name='cpf'>";
                echo"</div>";
                echo"<button type='submit' class='btn btn-primary'>Acessar</button>";
                echo"</form>";
                echo"</div> " ;  
                echo"</div>";
                echo"<div class='col-5'></div>";
                echo"</div>";
                echo"</div>";
        
        
               break; 
            endswitch;

    ?>
    
   
  </body>
</html>