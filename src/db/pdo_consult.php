<div class="title">PDO: Consultar</div>

<?php
require_once "pdo_connection.php";

$connection = newConnection();
$sql = "SELECT * FROM registration";
// PDO::FETCH_NUM
// PDO::FETCH_ASSOC
// PDO::FETCH_CLASS
// PDO::FETCH_BOTH
$result = $connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
print_r($result);

echo '<hr>';

$sql = "SELECT * FROM registration LIMIT :limit OFFSET :offset";
$stmt = $connection->prepare($sql);
$stmt->bindValue(":limit", 2, PDO::PARAM_INT);
$stmt->bindValue(":offset", 3, PDO::PARAM_INT);

if ($stmt->execute()) {
    $result = $stmt->fetchAll();
    print_r($result);
} else {
    echo "Código: " . $stmt->errorCode() . "<br/>";
    print_r($stmt->errorInfo());
}

echo '<hr>';

$sql = "SELECT * FROM registration WHERE id = ?";
$stmt = $connection->prepare($sql);
if ($stmt->execute([1])) {
    $result = $stmt->fetch();
    print_r($result);
} else {
    echo "Código: " . $stmt->errorCode() . "<br/>";
    print_r($stmt->errorInfo());
}

/*$sql = "SELECT * FROM registration WHERE id = :id";
$stmt = $connection->prepare($sql);
$stmt->bindValue(':id', 10, PDO::PARAM_INT);
if ($stmt->execute([':id' => 10])) {
    $result = $stmt->fetch();
    print_r($result);
} else {
    echo "Código: " . $stmt->errorCode() . "<br/>";
    print_r($stmt->errorInfo());
}*/

$connection = null;
$stmt = null;
