<?php
$servername = "SQLSERVER";
$dbname = "Placement";
$username = "tiagolopes";
$pwd = "gti2022";
try{
    $db = new PDO ("sqlsrv:server=$servername ; Database=$dbname" , "$username" , "$pwd");
    echo "Conectado com sucesso!";
    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    die (print_r ($e->getMessage()));
}
