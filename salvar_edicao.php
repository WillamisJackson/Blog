<?php
    require "conexao.php";

    
    if (isset($_POST['id'], $_POST['title'], $_POST['description'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        
        $sql = $conexao->prepare("UPDATE notices SET title_notice = ?, description_notice = ? WHERE id = ?");
        $result = $sql->execute([$title, $description, $id]);

        
        if ($result) {
            echo "Notícia atualizada com sucesso!";
            
            header("Location: index.php");
            exit;
        } else {
            echo "Erro ao atualizar a notícia.";
        }
    } else {
        echo "Dados inválidos.";
    }
?>