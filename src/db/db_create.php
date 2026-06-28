<div class="title">Criar Banco</div>

<?php
require_once 'connection.php';

$connection = newConnection(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';
if ($connection->query($sql) === true) {
    echo '<p>Banco de dados criado com sucesso!</p>';
} else {
    echo '<p>Erro ao criar o banco de dados: ' . $connection->error . '</p>';
}

$connection->close();
