<?php

require_once "../conexao.php";

/**
 * Descrição: Usado em transações (ex: Pix) para garantir que se a ação for executada corretamente, ele autoriza a execução. Depende da sua regra de negócio
 * PDO::beginTransaction -- Inicia uma transação
 * PDO::commit           -- Autoriza transação
 * PDO::rollback         -- Volta atrás
 */

 try{
   $pdo->beginTransaction();
   $pdo->exec("Insert into Usuario (nome, email) Values ('Teste PDO', 'pdo@gmail.com')   ");
   
   //Anular execução atual
   $pdo->rollback();

   $pdo->beginTransaction();
   $pdo->exec("Insert into Usuario (nome, email) Values ('Teste PDO2', 'pdo2@gmail.com')   ");

   //Autoriza executar
   $pdo->commit();

 } catch(PDOException $err){
    echo $err->getMessage();
 }