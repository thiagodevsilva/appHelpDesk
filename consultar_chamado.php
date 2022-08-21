<?php require_once "validador_acesso.php" ?>

<?php

 //chamados
$chamados = array();

//abrir o arquivo.hd
$arquivo = fopen('arquivo.hd', 'r');

//enquanto houver registros (linhas) a serem recuperados
while(!feof($arquivo)) { // testa pelo fim do arquivo
  //linhas
  $registro = fgets($arquivo);
  //$chamados[] = $registro;

  //explode dos detalhes do registro para verificar o id do usuário responsável pelo cadastro
  $registro_detalhes = explode(';', $registro);

  //(perfil id = 2) só vamos exibir o chamado, se ele foi criado pelo usuário
  if($_SESSION['perfil'] == 2) {

    //se usuário autenticado não for o usuário de abertura do chamado então não faz nada
    if($_SESSION['id'] != $registro_detalhes[0]) {
      continue; //não faz nada
    
    }else {
      $chamados[] = $registro; //adiciona o registro do arquivo ao array $chamados
    }
  
  }else {
    $chamados[] = $registro; //adiciona o registro do arquivo ao array $chamados
  }
  
}

fclose($arquivo);

?>

<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Consulta de chamados</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark" style="flex-flow: nowrap;">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>      
      <a href="logoff.php" class="btn btn-sm btn-info" >Sair</a>
        
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <?php

                foreach($chamados as $chamado) {

              ?>

              <?php

              $chamado_dados = explode(';', $chamado);          

              if (count($chamado_dados) < 3) {
                continue;
              }

              ?>


              
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?=$chamado_dados[1]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2]?></h6>
                  <p class="card-text"><?=$chamado_dados[3]?></p>
                  <footer class="blockquote-footer">Criado por <cite title="Source Title"> <?=$chamado_dados[4]?></cite></footer>

                </div>
              </div>

              <?php

                }  

              ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>