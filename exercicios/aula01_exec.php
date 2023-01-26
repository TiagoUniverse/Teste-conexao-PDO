<?php

require_once "../conexao.php";

/**
 * PDO::exec -- Executa uma instrução SQL e retorna o número de linhas afetadas/ modificadas
 */

 try{
    $count = $pdo->exec("Select * from Colaborador");
    echo "$count linhas afetadas ";


 } catch(PDOException $err){
    echo $err->getMessage();
 }