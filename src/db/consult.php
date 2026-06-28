<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<div class="title">Consultar Registros</div>

<?php
require_once "connection.php";

$sql = "SELECT id, name, email, birthdate FROM registration";
$connection = newConnection();

$result = $connection->query($sql);

$registers = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $registers[] = $row;
        //array_push($registers, $row);
    }
} elseif ($connection->error) {
    echo "Erro: " . $connection->error;
} else {
    echo "Nenhum registro encontrado.";
}

$connection->close();
?>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>E-mail</th>
      <th>Data de Nascimento</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($registers as $register): ?>
      <tr>
        <td><?= $register['id'] ?></td>
        <td><?= $register['name'] ?></td>
        <td><?= $register['email'] ?></td>
        <td><?= $register['birthdate'] ? date('d/m/Y', strtotime($register['birthdate'])) : 'N/A' ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<style>
  table > * {
    font-size: 1.2rem;
  }
</style>