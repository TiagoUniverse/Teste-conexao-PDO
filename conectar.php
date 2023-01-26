<?php
$servername = "SQLSERVER";
try{
    $db = new PDO ("sqlsrv:server=$servername ; Database=Placement" , "tiagolopes" , "minhaSenha");
    echo "Conectado com sucesso!";
    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    die (print_r ($e->getMessage()));
}

$stmt = $db->prepare('Select * from Usuario;');
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// $stmt->debugDumpParams();

// echo $stmt->columnCount();


print_r($result);
