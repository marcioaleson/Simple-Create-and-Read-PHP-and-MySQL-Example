<?php
include "clientes.php";
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/materialize.css" media="screen,projection">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastros de clientes</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="nav-wrapper" style="background-color:#fff;">
          <a href="index.php" class="brand-logo right">
           <img src="img/senac.png" alt="Logo Senac" />
          </a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
            <li><a href="listagem.php">Clientes</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="main">
      <?php salvar(); ?>
        <table class="bordered">
          <thead>
            <tr>
              <th data-field="id">Id</th>
              <th data-field="nome">Nome</th>
              <th data-field="endereco">Endereço</th>
              <th data-field="datanasc">Data de nascimento</th>
              <th data-field="cidade">Cidade</th>
              <th data-field="estado">Estado</th>
            </tr>
          </thead>
          <tbody>
            <?php listar(); ?>
          </tbody>
      </table>;

    </div>
    <div class="footer-copyright">
       <div class="container">
                 © 2015 Copyright. Todos os direitos reservador.
       </div>
    </div>

  </body>
      <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript" src="js/javascript.js"></script>
</html>
