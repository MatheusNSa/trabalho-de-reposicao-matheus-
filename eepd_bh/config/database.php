<?php
// Configurações de Conexão com o Banco de Dados (PDO)
// PDO (PHP Data Objects) é a forma mais moderna e segura de conectar
$host = 'localhost';
$db   = 'eepd_bh'; // <-- DEVE ser o mesmo nome que você criou no MySQL
$user = 'root';    // <-- Usuário padrão do XAMPP/MySQL
$pass = '';        // <-- Senha padrão do XAMPP/MySQL (deixe em branco se não tiver senha)
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    // Lança exceções em caso de erro (melhor para debug e tratamento de erros)
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    // Define o fetch padrão como array associativo (colunas indexadas por nome)
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     // Tenta estabelecer a conexão
     $pdo = new PDO($dsn, $user, $pass, $options);
     // Se a conexão for bem-sucedida, a variável $pdo estará disponível
} catch (\PDOException $e) {
     // Se houver erro, para a execução e exibe a mensagem de erro
     // Em produção, isso deve ser substituído por uma mensagem genérica
     die("Erro de Conexão com o Banco de Dados: " . $e->getMessage());
}
?>