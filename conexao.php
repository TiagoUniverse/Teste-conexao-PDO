<?php
$servername = "SQLSERVER";
try{
    $db = new PDO ("sqlsrv:server=$servername ; Database=Placement" , "tiagolopes" , "minhaSenha");
    // echo "Conectado com sucesso!";
    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    die (print_r ($e->getMessage()));
}
