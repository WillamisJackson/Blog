<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "bd_blog";

try {
    
    $conexao = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    exit;
}
?>