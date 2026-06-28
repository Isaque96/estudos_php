<div class="title">Excluir Registro</div>

<?php
require_once "connection.php";

$sql = "DELETE FROM registration WHERE id = ?";
$connection = newConnection();

$id = 1;
$stmt = $connection->prepare($sql);

$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo '<p>Registro excluído com sucesso!</p>';
} else {
    echo '<p>Erro ao excluir o registro: ' . $connection->error . '</p>';
}

$connection->close();
