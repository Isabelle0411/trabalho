<?php
// comentarios.php
$db = new SQLite3('db_comentarios.sqlite');

// Cria a tabela se não existir
$db->exec("CREATE TABLE IF NOT EXISTS comentarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    mensagem TEXT NOT NULL,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    $stmt = $db->prepare("INSERT INTO comentarios (nome, mensagem) VALUES (:nome, :mensagem)");
    $stmt->bindValue(":nome", $nome, SQLITE3_TEXT);
    $stmt->bindValue(":mensagem", $mensagem, SQLITE3_TEXT);
    $stmt->execute();

    header("Location: " . $_SERVER["HTTP_REFERER"]); // Redireciona de volta à página anterior
    exit();
}
?>
