<?php

require_once "../conexao.php";

$consulta = $pdo->query("SELECT nome, email FROM usuario;");


while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "Nome: {$linha['nome']} - Email: {$linha['email']}<br />";
}