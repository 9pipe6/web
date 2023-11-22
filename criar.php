<?php
include('configdb.php');

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $titulo = $_POST['titulo'];
    $mensagem = $_POST['mensagem'];
    $imagem_link = $_POST['imagem_link'];
    $autor_nome = $_POST['autor_nome'];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO noticias (titulo, mensagem, imagem_link, autor_nome) VALUES ('$titulo', '$mensagem', '$imagem_link', '$autor_nome')";
    
    if ($mysqli->query($sql)) {
        echo "Postagem criada com sucesso!";
    } else {
        echo "Erro ao criar postagem: " . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Criar Postagem</title>
</head>
<body>

    <header>
        <h1>Criar Nova Postagem</h1>
    </header>

    <section>
        <button onclick="location.href='index.php'">Voltar para o Início</button>
    </section>

    <section>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" required>

            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" rows="4" required></textarea>

            <label for="imagem_link">Link da Imagem:</label>
            <input type="text" name="imagem_link">

            <label for="autor_nome">Autor:</label>
            <input type="text" name="autor_nome" required>

            <input type="submit" value="Criar Postagem">
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Site de Notícias</p>
    </footer>

</body>
</html>
