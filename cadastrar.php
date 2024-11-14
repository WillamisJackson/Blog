<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/cadastrar.css">
    <title>Cadastrar</title>
</head>
<body>
        <header id="header">
            <div class="menu">
                <h2>Blog</h2>
                <h2><a href="index.php">Início</a></h2>
            </div>
            <h1>Cadastrar Notícias</h1>
        </header>

        <main id="main">
            <form class="form" method="POST" action="cadastrar_action.php">
                <div class="input-search">
                    <label for="inputNotice">Título da notícia:</label>
                    <input type="text" name="notice" id="inputNotice">
                </div>
                <div class="input-search">
                    <label for="inputDescription">Descrição da notícia:</label>
                    <textarea type="text" name="description" rows="5" id="inputDescription"></textarea>
                    <div class="input-search">
                        <input type="submit" value="Cadastrar">
                    </div>
                </div>
            </form>
        </main>
        
        <?php require "footer.php";?>
</body>
</html>