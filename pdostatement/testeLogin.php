<?php

require_once "../conexao.php";

$senha = $_POST['senha'];
$email = $_POST['email'];


// E-mail está protegido deste código e o campo da senha não funciona por causa dos parênteses
//Select email, senha from Usuario Where status = 1 and senha = HASHBYTES('sha1', '' or 1=1 --') and email = 'tiagocesar68@gmail.com'

 try{

   if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // valid address
      echo "E-mail correto";

      $servername = "SQLSERVER";
      $dbname = "Placement";
      $username = "tiagolopes";
      $pwd = "gti2022";
      try {
          $pdo = new PDO("sqlsrv:server=$servername ; Database=$dbname", "$username", "$pwd");
          // echo "Conectado com sucesso!";
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (Exception $e) {
          die(print_r($e->getMessage()));
      }
    
    
      $prepare = $pdo->prepare("Select email, senha from Usuario Where status = 1 and senha = HASHBYTES('sha1', :senha) and email = :email  ");
      $prepare->bindParam(":senha", $senha);
      $prepare->bindParam(":email", $email);
      $result = $prepare->execute();

      if($result){
         echo "Consulta com sucesso!";
      } else {
         echo "Falha na consulta";
      }

  } else {
      // invalid address
      echo "E-mail inválido!";
  }




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