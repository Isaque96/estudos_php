<div class="title">Criar Tabela</div>

<?php
require_once 'connection.php';

$connection = newConnection('curso_php');
$sql = 'CREATE TABLE IF NOT EXISTS registration(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    birthdate DATE,
    site VARCHAR(100),
    children INT(2),
    salary DECIMAL(10,2)
)';

$result = $connection->query($sql);
if ($result) {
    echo '<p>Tabela criada com sucesso!</p>';
} else {
    echo '<p>Erro ao criar a tabela: ' . $connection->error . '</p>';
}

$connection->close();
