<?php

require_once "../conexao.php";

$nome = $_POST['nome'];
$Sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];

 try{

  $sql = "Select * from Usuario where nome = :nome and nomeSobrenome = :sobrenome and email = :email";
  $prepare = $pdo->prepare($sql);
  $prepare->bindParam(":nome" , $nome);
  $prepare->bindParam(":sobrenome" , $sobrenome);
  $prepare->bindParam(":email" , $email);
  
  
  $count = $prepare->execute();

  echo $count . " linhas afetadas";

 } catch(PDOException $err){
    echo $err->getMessage();
 }


 /**
  * SQL INJECTION -- Uso de código malicioso que adultera alguma consulta sql dentro do seu código.
  * 
  * SELECT * FROM login where usuario = '' or 1=1';

  * XSS -> Cross-site Scripting
  *<script>alert("Ataque XSS"); </script>
  */