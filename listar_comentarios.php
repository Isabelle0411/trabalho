<?php
$db = new SQLite3('db_comentarios.sqlite');

$result = $db->query("SELECT nome, mensagem, data FROM comentarios ORDER BY id DESC");

while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo "<div class='comentario'>";
    echo "<strong>" . htmlspecialchars($row['nome']) . "</strong><br>";
    echo "<p>" . nl2br(htmlspecialchars($row['mensagem'])) . "</p>";
    echo "<small>Publicado em: " . date("d/m/Y H:i", strtotime($row['data'])) . "</small>";
    echo "<hr>";
    echo "</div>";
}
?>
