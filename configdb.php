<?php

// Configurações do banco de dados
define('DB_HOST', 'localhost');       // Substitua 'seu_host' pelo host do seu banco de dados (geralmente 'localhost')
define('DB_USER', 'root');    // Substitua 'seu_usuario' pelo nome de usuário do seu banco de dados
define('DB_PASSWORD', ''); // Substitua 'sua_senha' pela senha do seu banco de dados
define('DB_NAME', 'noticias_db');    // Substitua 'noticias_db' pelo nome do seu banco de dados

// Conexão com o banco de dados
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Verifica se há erros na conexão
if ($mysqli->connect_error) {
    die("Erro de Conexão: " . $mysqli->connect_error);
}

?>
