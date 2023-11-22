<?php
include_once('configdb.php');

// Consulta para obter todas as postagens
$sql = "SELECT * FROM noticias";
$result = $mysqli->query($sql);

// Verifica se há resultados
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>" . $row['titulo'] . "</h2>";
        echo "<p>Autor: " . $row['autor_nome'] . "</p>";
        echo "<p>Data da noticia: " . $row['data_adicao'] . "</p>";
        echo "<p>" . $row['mensagem'] . "</p>";
        if (!empty($row['imagem_link'])) {
            echo "<img src='" . $row['imagem_link'] . "' alt='Imagem da Notícia'>";
        }
        echo "</div>";
    }
} else {
    echo "Nenhuma notícia encontrada.";
}

// Fecha a conexão com o banco de dados
$mysqli->close();
?>
