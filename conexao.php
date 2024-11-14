<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "bd_blog";

try {
    // Criar a conexão PDO
    $conexao = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    // Definir o modo de erro para exceções
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    exit;
}
?>