<?php

include "conexao.php";

  function salvar(){
  if (isset($_POST['nome'])) {
    # code...
    $sql = "insert into clientes(nome,endereco,datanascimento,cidades_id,cidades_estados_id) values('".$_POST['nome'].
    "','".$_POST['endereco']."','".$_POST['datanasc']."',".$_POST['cidades_id'].",".$_POST['estados_id'].")";
    mysql_query($sql);
  }
}

  function listar(){
  $sql = "select clientes.id,clientes.nome,clientes.endereco,clientes.datanascimento, cidades.nome as cidade,estados.nome as estado from clientes
  inner join cidades on clientes.cidades_id = cidades.id
  inner join estados on clientes.cidades_estados_id = estados.id order by id";
  $result = mysql_query($sql);

  while ($linha = mysql_fetch_array($result)){
    # code...
  echo "<tr>";
  echo "<td>".$linha['id']."</td>";
  echo "<td>".$linha['nome']."</td>";
  echo "<td>".$linha['endereco']."</td>";
  echo "<td>".$linha['datanascimento']."</td>";
  echo "<td>".$linha['cidade']."</td>";
  echo "<td>".$linha['estado']."</td>";
  echo "</tr>";
}
}
?>
