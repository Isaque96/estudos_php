<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<div class="title">Alterar Registro</div>

<?php
require_once "connection.php";
$connection = newConnection();

if (isset($_GET['code'])) {
    $sql = "SELECT * FROM registration WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $_GET['code']);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $datas = $result->fetch_assoc();
            $datas['salary'] = str_replace('.', ',', $datas['salary']);
        }
    }
}

if (count($_POST) > 0) {
    $datas = $_POST;
    $errors = [];

    if (!filter_input(INPUT_POST, 'name')) {
        $errors['name'] = 'Nome é obrigatório';
    }

    if (filter_input(INPUT_POST, 'birthdate')) {
        $date = DateTime::createFromFormat('Y-m-d', $datas['birthdate']);
        if (!$date) {
            $errors['birthdate'] = 'Nascimento deve estar no formato dd/mm/aaaa';
        }
    } else {
        $errors['birthdate'] = 'Nascimento é obrigatório';
    }

    if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'E-mail inválido';
    }

    if (!filter_input(INPUT_POST, 'site', FILTER_VALIDATE_URL)) {
        $errors['site'] = 'Site inválido';
    }

    $childrenConfig = [
        'options' => ['min_range' => 0, 'max_range' => 20]
    ];
    if (!filter_input(INPUT_POST, 'children', FILTER_VALIDATE_INT, $childrenConfig) && $datas['children'] != 0) {
        $errors['children'] = 'Quantidade de filhos inválida (0-20)';
    }

    $salaryConfig = ['options' => ['decimal' => ',']];
    if (!filter_input(INPUT_POST, 'salary', FILTER_VALIDATE_FLOAT, $salaryConfig)) {
        $errors['salary'] = 'Salário inválido';
    }

    if (!count($errors)) {
        $sql = "UPDATE registration
                SET name = ?, birthdate = ?, email = ?, site = ?, children = ?, salary = ?
                WHERE id = ?";

        $stmt = $connection->prepare($sql);
        $params = [
          $datas['name'],
          isset($date) ? $date->format('Y-m-d') : null,
          $datas['email'],
          $datas['site'],
          $datas['children'],
          str_replace(',', '.', $datas['salary']),
          $datas['id']
        ];

        $stmt->bind_param("ssssidi", ...$params);

        if ($stmt->execute()) {
            unset($datas);
            echo '<p>Registro atualizado com sucesso!</p>';
        } else {
            echo '<p>Erro ao atualizar o registro: ' . $connection->error . '</p>';
        }

        $connection->close();
    }
}
?>

<?php if (!empty($errors)): ?>
  <!--<div class="alert alert-danger" role="alert">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= $error ?></li>
      <?php endforeach; ?>
    </ul>
  </div>-->
<?php endif; ?>

<form action="/studies.php" method="get">
  <input type="hidden" name="dir" value="db">
  <input type="hidden" name="file" value="update">
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="text"
       class="form-control"
       name="code"
       value="<?= isset($_GET['code']) ? $_GET['code'] : '' ?>"
       placeholder="Informe o código da consulta...">
    </div>
    <div class="col-sm-2 d-flex align-items-end">
      <button class="btn btn-success w-100">Consultar</button>
    </div>
  </div>
</form>

<form action="#" method="post">
  <input type="hidden" name="id" value="<?= isset($datas['id']) ? $datas['id'] : '' ?>">
  <div class="row">
    <div class="form-group col-md-9">
      <label for="name">Nome</label>
      <input type="text"
       name="name" 
       id="name"
       class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>"
       placeholder="Digite seu nome"
       value="<?= isset($datas['name']) ? $datas['name'] : '' ?>">
      <div class="invalid-feedback">
        <?= isset($errors['name']) ? $errors['name'] : '' ?>
      </div>
    </div>
    <div class="form-group col-md-3">
      <label for="birth">Nascimento</label>
      <input type="date"
       name="birthdate"
       id="birthdate"
       class="form-control <?= isset($errors['birthdate']) ? 'is-invalid' : '' ?>"
       placeholder="Digite sua data de nascimento"
       value="<?= isset($datas['birthdate']) ? $datas['birthdate'] : '' ?>">
      <div class="invalid-feedback">
        <?= isset($errors['birthdate']) ? $errors['birthdate'] : '' ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="email">E-mail</label>
      <input type="email"
       name="email"
       id="email"
       class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>"
       placeholder="Digite seu e-mail"
       value="<?= isset($datas['email']) ? $datas['email'] : '' ?>">
      <div class="invalid-feedback">
        <?= isset($errors['email']) ? $errors['email'] : '' ?>
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="site">Site</label>
      <input type="url"
       name="site"
       id="site"
       class="form-control <?= isset($errors['site']) ? 'is-invalid' : '' ?>"
       placeholder="Digite o URL do seu site"
       value="<?= isset($datas['site']) ? $datas['site'] : '' ?>">
      <div class="invalid-feedback">
        <?= isset($errors['site']) ? $errors['site'] : '' ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="children">Quantidade de Filhos</label>
      <input type="number"
       name="children"
       id="children"
       class="form-control <?= isset($errors['children']) ? 'is-invalid' : '' ?>"
       placeholder="Digite o número de filhos"
       value="<?= isset($datas['children']) ? $datas['children'] : '' ?>">
      <div class="invalid-feedback">
        <?= isset($errors['children']) ? $errors['children'] : '' ?>
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="salary">Salário</label>
      <input type="text"
       name="salary"
       id="salary"
       class="form-control <?= isset($errors['salary']) ? 'is-invalid' : '' ?>"
       placeholder="Digite seu salário"
       value="<?= isset($datas['salary']) ? $datas['salary'] : '' ?>">
      <div class="invalid-feedback">
        <?= isset($errors['salary']) ? $errors['salary'] : '' ?>
      </div>
    </div>
    <!--<div class="form-group col-md-6">
      <label for="salary">Salário</label>
      <input type="number"
       step="any"
       name="salary"
       id="salary"
       class="form-control <?= isset($errors['salary']) ? 'is-invalid' : '' ?>"
       placeholder="Digite seu salário"
       value="<?= isset($datas['salary']) ? $datas['salary'] : '' ?>">
      <div class="invalid-feedback">
        <?= isset($errors['salary']) ? $errors['salary'] : '' ?>
      </div>
    </div>-->
  </div>
  <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
</form>
