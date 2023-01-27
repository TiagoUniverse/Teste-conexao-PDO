<?php

require_once "../conexao.php";

/**
 * PDO::prepare          -- Prepara a SQL que precisa "escapar" os dados para execução, gerando uma instancia PDOtStatement. 
 * PDOStatement::execute -- Executar. Ele retorna true ou false se a operação funcionou
 */

 try{
  $prepare = $pdo->prepare("SELECT * from Usuario Where nome = :nome ");
  $prepare->execute([
    'nome' => 'Tiago' 
  ]);

if ($prepare){
  echo "Consulta realizada com sucesso!";
}

 } catch(PDOException $err){
    echo $err->getMessage();
 }