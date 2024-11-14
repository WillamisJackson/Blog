<?php
    require "conexao.php";

    // Obtém o ID da notícia a ser editada
    $id = $_GET['id'] ?? null;

    if ($id) {
        $sql = $conexao->prepare("SELECT * FROM notices WHERE id = ?");
        $sql->execute([$id]);
        $notice = $sql->fetch(PDO::FETCH_ASSOC);
    }

    // Verifique se a notícia existe
    if ($notice):
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Notícia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .edit-container {
            width: 80%;
            max-width: 600px;
            background-color: #836FFF;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
            color: #333;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            resize: vertical;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
        }
        button[type="submit"], .delete-button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            color: white;
        }
        button[type="submit"] {
            background-color: #4CAF50;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
        .delete-button {
            background-color: #FF6347;
            text-decoration: none;
            text-align: center;
            display: inline-block;
            width: 48%;
        }
        .delete-button:hover {
            background-color: #e55347;
        }
    </style>
</head>
<body>
    <div class="edit-container">
        <h2>Editar Notícia</h2>
        <form action="salvar_edicao.php" method="POST">
            <input type="hidden" name="id" value="<?= $notice['id']; ?>">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" value="<?= $notice['title_notice']; ?>">
            
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" rows="5"><?= $notice['description_notice']; ?></textarea>
            
            <div class="button-container">
                <button type="submit">Salvar Alterações</button>
                <a href="excluir.php?id=<?= $notice['id']; ?>" class="delete-button">Excluir Notícia</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php endif; ?>