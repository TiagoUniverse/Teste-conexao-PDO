<?php

require_once "../conexao.php";

/**
 * PDO::exec -- Executa uma instrução SQL e retorna o número de linhas afetadas
 */

 try{
    // $count = $pdo->exec("Select * from Colaborador");
    // echo "$count linhas afetadas ";



    $stmt = $pdo->prepare('Select * from Usuario;');
    $cont = $stmt->execute();

    echo $cont;






 } catch(PDOException $err){
    echo $err->getMessage();
 }