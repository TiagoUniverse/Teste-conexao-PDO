<?php

require_once "../conexao.php";

/**
 * PDOSTATEMENT>::bindValue -- Trata os parâmetros de uma SQL . Pode passar o valor direto no bindvalue
 * execute                  -- Pode ser usado tanto com bindsValue ou passar a array dentro dele.
 */

 try{
   $sql ='SELECT * from Usuario where nome = :nome ';
   $prepare = $pdo->prepare($sql);
   $prepare->bindValue(":nome" , "Tiago");
   $count = $prepare->execute();

   //Duas opções para proteger os parâmetros
   // $count = $prepare->execute(array(":nome" => "Tiago"));


   echo $count . " linhas afetadas.";



 } catch(PDOException $err){
    echo $err->getMessage();
 }