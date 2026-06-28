<div class="title">PDO: Deletar</div>

<?php
require_once "pdo_connection.php";

$sql = "DELETE FROM registration WHERE id = ?";
$connection = newConnection();

$stmt = $connection->prepare($sql);

if ($stmt->execute([10])) {
    echo "Sucesso :)";
} else {
    echo "Erro :(";
    print_r($stmt->errorInfo());
}
