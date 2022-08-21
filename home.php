<?php require_once "validador_acesso.php"?>

<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-home {
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
          
      <a href="logoff.php" class="btn btn-sm btn-info">Sair</a>
        
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card" style="margin: 4px 12px">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="">
                <div class="mb-3">
                  <a href="abrir_chamado.php" style="text-decoration: none; display: flex; flex-wrap: nowrap; align-items: center;">
                    <img src="formulario_abrir_chamado.png" width="70" height="70">
                    <span style="color: #17a2b8; font-weight: bold; font-size: 1.6em; font-family: Helvetica">Abrir chamado</span>
                  </a>
                </div>
                <div class="">
                    <a href="consultar_chamado.php" style="text-decoration: none; display: flex; flex-wrap: nowrap; align-items: center;">
                      <img src="formulario_consultar_chamado.png" width="70" height="70">
                      <span style="color: #17a2b8; font-weight: bold; font-size: 1.6em; font-family: Helvetica; margin-left: 4px;">Consultar chamado</span>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>