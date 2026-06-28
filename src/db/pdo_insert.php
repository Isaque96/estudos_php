<div class="title">PDO: Inserir</div>

<?php
require_once "pdo_connection.php";

$sql = "INSERT INTO registration (name, birthdate, email, site, children, salary)
        VALUES (:name, :birthdate, :email, :site, :children, :salary)";

$data = [
  'name' => 'Luiz Carvalho',
  'birthdate' => '2000-04-20',
  'email' => 'luiz.carvalho@email.com',
  'site' => 'https://luiz.com',
  'children' => 1,
  'salary' => 1800.50
];

$connection = newConnection();

try {
    $stmt = $connection->prepare($sql);

    if ($stmt->execute($data)) {
        $id = $connection->lastInsertId();
        echo "Registro de Id: " . $id . ", inserido com sucesso!";
    }
} catch (PDOException $pe) {
    echo "Erro: " . $pe->getMessage();
}
