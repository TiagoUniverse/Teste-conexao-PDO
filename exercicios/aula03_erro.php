<?php

require_once "../conexao.php";

/**
 * Descrição: Eles auxiliam a personalizar as suas mensagens de erro
 * PDO::errorCode -- Retornar apenas o código do erro do drive SQLTATE
 * PDO::errorInfo -- Array com informações sobre o erro ( código de error do SQL STATE, codigo do erro do drive, mensagem d eerro)
 */

 try{
  $pdo->exec("Select * from usuari222o");

 } catch(PDOException $err){
    echo "Erro na execução com o banco de dados. Informe ao programador o seguinte erro : <br>";
    echo "Código: " . $pdo->errorInfo()[1] . "<br>";
    echo "Mensagem: " . $pdo->errorInfo()[2] . "<br>";

    // echo "Código do SQLSTATE: " . $pdo->errorCode();
    // echo "<br>";
    // print_r($pdo->errorInfo());

    // echo "<br> <br>";
    // echo $err->getMessage(); 
  }