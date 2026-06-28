<div class="title">Inserir Registro #01</div>

<?php
require_once "connection.php";

$sql = "INSERT INTO registration (name, birthdate, email, site, children, salary)
 VALUES (?, ?, ?, ?, ?, ?)";

$connection = newConnection();
$smt = $connection->prepare($sql);
$name = "Isaque Schuwarte";
$birthdate = "1996-01-27";
$email = "isaque.schuwarte@example.com";
$site = "https://www.isaque.com";
$children = 2;
$salary = 7500.00;

$smt->bind_param("ssssid", $name, $birthdate, $email, $site, $children, $salary);

if ($smt->execute()) {
    echo '<p>Registro inserido com sucesso!</p>';
} else {
    echo '<p>Erro ao inserir o registro: ' . $connection->error . '</p>';
}

$connection->close();
