<?php
// Carregar as variáveis de ambiente do arquivo .env (usando a biblioteca vlucas/phpdotenv)
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dsn = "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'] . ";charset=utf8mb4";
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Exceções em erros
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Modo de busca padrão
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Desabilitar preparação emulada
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    // Lide com a exceção de maneira adequada (p. ex., logar o erro)
    error_log($e->getMessage());
    // Você pode mostrar uma mensagem de erro amigável ao usuário
    echo "Erro ao conectar ao banco de dados.";
    exit;
}

// Função para preparar e executar consultas de forma segura
function executeQuery($pdo, $query, $params = []) {
    try {
        $stmt = $pdo->prepare($query);
        $stmt->execute($params);
        return $stmt;
    } catch (PDOException $e) {
        // Lide com a exceção de maneira adequada (p. ex., logar o erro)
        error_log($e->getMessage());
        // Você pode mostrar uma mensagem de erro amigável ao usuário
        echo "Erro ao executar a consulta.";
        exit;
    }
}
