<?php
    require "conexao.php";

    // Verifica se o ID e os campos de título e descrição foram enviados
    if (isset($_POST['id'], $_POST['title'], $_POST['description'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        // Prepara a consulta SQL para atualizar a notícia
        $sql = $conexao->prepare("UPDATE notices SET title_notice = ?, description_notice = ? WHERE id = ?");
        $result = $sql->execute([$title, $description, $id]);

        // Verifica se a atualização foi bem-sucedida
        if ($result) {
            echo "Notícia atualizada com sucesso!";
            // Redireciona para a página principal ou para uma página de sucesso
            header("Location: index.php"); // Ajuste o caminho conforme necessário
            exit;
        } else {
            echo "Erro ao atualizar a notícia.";
        }
    } else {
        echo "Dados inválidos.";
    }
?>
