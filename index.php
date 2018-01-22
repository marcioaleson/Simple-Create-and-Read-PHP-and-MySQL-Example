<?php
include "conexao.php";
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
    <div class="row">
        <form  id="cadastro" class="col s12" action="listagem.php" method="post">
          <div class="row">
            <div class="input-field col s6">
              <input id="nome"  name="nome" type="text" class="validate">
              <label for="nome">Nome</label>
            </div>
          </div>
          <div id="date" class="row">
            <div class="input-field col s6">
              <input id="datanasc" name="datanasc" type="date" class="datepicker">
              <label for="date">Data de nascimento</label>
            </div>
          </div>

          <div id="endereco" class="row">
            <div class="input-field col s6">
              <input id="endereco" name="endereco" type="text" class="validate">
              <label for="endereco">Endereço</label>
            </div>
          </div>
          <br>
      <div class="selecao">
      <?php
            $sql = "SELECT * FROM estados";
            $result = mysql_query($sql);
            echo '<div  class="input-field col s3">';
            echo '<select id="estados" name="estados_id">';
            echo '<option value="" disabled selected>Estados</option>';
            while ($linha = mysql_fetch_array($result)) {
            # code...
             echo '<option value="'.$linha['id'].'">'.$linha['nome'].'</option>';
            }
            echo "</select>";
        ?>
            <label>Escolha um estado</label>
        </div>
      </div>
      <br><br><br>
      <p>
          <button id="salvar" class="btn waves-effect waves-light" type="submit" name="action">Salvar</button>
          <button id="cancelar" class="btn waves-effect waves-light" type="reset" name="action">Cancelar</button>
      </p>
        </form>
      </div>
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
