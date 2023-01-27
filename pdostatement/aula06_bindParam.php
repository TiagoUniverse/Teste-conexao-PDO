<?php

require_once "../conexao.php";

/**
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