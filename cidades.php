<?php

include "conexao.php";

  $codigo = $_GET['codigo'];
  $sql = 'SELECT * FROM cidades WHERE estados_id='.$codigo;
  $result = mysql_query($sql);
  $select = '<div id="cidades_remover" class="input-field col s3" >'
            .'<select id="cidades" name="cidades_id">'
            .'<option value="" disabled selected>Cidades</option>';
          while ($linha = mysql_fetch_array($result)) {
            $select .='<option value="'.$linha['id'].'">'.$linha['nome'].'</option>';
          }
           $select .="</select>"
           .'<label>Escolha uma cidade</label>'
           .'</div>'
           .'<script type="text/javascript"">'
           .'$("#cidades").material_select();</script>';
  echo $select;
 ?>
