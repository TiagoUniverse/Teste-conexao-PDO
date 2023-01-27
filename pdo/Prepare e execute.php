<?php

require_once "../conexao.php";

/**
 * 
 */

 try{
    $stmt = $pdo->prepare('Select * from Usuario;');
    $cont = $stmt->execute();

    var_dump($stmt);


 } catch(PDOException $err){
    echo $err->getMessage();
 }