<?php

require_once "../conexao.php";

/**
 * PDOSTATEMENT::bindParam --  Trata os parâmetros de uma SQL . Obrigado a passar uma variação como parametro
 */
$nome = "Tiago";

 try{
  $sql ='SELECT * from Usuario where nome = :nome ';
  $prepare = $pdo->prepare($sql);

  $prepare->bindParam(":nome" , $nome);
  $count = $prepare->execute();

  echo $count . " linhas afetadas.";

 } catch(PDOException $err){
    echo $err->getMessage();
 }