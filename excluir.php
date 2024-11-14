<?php
    require "conexao.php";

    $id = $_GET['id'] ?? null;

    if ($id) {
        $sql = $conexao->prepare("DELETE FROM notices WHERE id = ?");
        $sql->execute([$id]);
        header("Location: index.php");
        exit;
    } else {
        echo "ID inválido.";
    }
?>