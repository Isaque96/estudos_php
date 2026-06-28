<div class="title">PDO: Alterar</div>

<?php
require_once "pdo_connection.php";

$sql = "UPDATE registration
        SET name = ?, birthdate = ?, email = ?, site = ?, children = ?, salary = ?
        WHERE id = ?";

$connection = newConnection();
$stmt = $connection->prepare($sql);

$result = $stmt->execute([
  'Fernanda Lima',
  '2000-01-19',
  'fernanda.lima@email.com',
  'https://fernanda.com',
  0,
  3000,
  6
]);

if ($result) {
    echo "Sucesso :)";
} else {
    print_r($stmt->errorInfo());
}
