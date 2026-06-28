<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<div class="title">Excluir Registro #02</div>

<?php
require_once "connection.php";
$connection = newConnection();

if (isset($_GET['exclude'])) {
    $excludeSql = "DELETE FROM registration WHERE id = ?;";
    $id = (int)$_GET['exclude'];

    $stmt = $connection->prepare($excludeSql);
    $stmt->bind_param("i", $id);

    if (!$stmt->execute()) {
        echo "Houve algum problema com exclusão.";
    }
}

$sql = "SELECT id, name, email, birthdate FROM registration";
$result = $connection->query($sql);

$registers = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $registers[] = $row;
    }
} elseif ($connection->error) {
    echo "Erro: " . $connection->error;
}

$connection->close();
?>

<table class="table table-hover table-striped table-bordered">
  <thead>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Nascimento</th>
    <th>Ações</th>
  </thead>
  <tbody>
    <?php foreach ($registers as $register): ?>
      <tr>
        <td><?= str_pad($register['id'], 2, '0', STR_PAD_LEFT) ?></td>
        <td><?= $register['name'] ?></td>
        <td><?= $register['email'] ?></td>
        <td>
          <?= $register['birthdate'] ? date('d/m/Y', strtotime($register['birthdate'])) : 'N/A' ?>
        </td>
        <td>
          <a 
           href="/studies.php?dir=db&file=delete_2&exclude=<?= $register['id'] ?>"
           class="btn btn btn-danger"
          >
          Deletar
          </a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<style>
  table > * {
    font-size: 1.2rem;
  }
</style>