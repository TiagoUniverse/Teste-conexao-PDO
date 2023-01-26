<?php

require_once "../conexao.php";

/**
 * PDO::query -- Prepara e executa SQL que não precisa "escapar" os dados
 */

 try{
  $result = $pdo->query( "Select * from StatusTimeline");

  foreach($result as $linha){
    print_r($linha);
  }


 } catch(PDOException $err){
    echo $err->getMessage();
 }