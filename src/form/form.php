
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<div class="title">Formulário</div>

<h2>Cadastro</h2>

<?php
if (count($_POST) > 0) {
    $errors = [];

    if (!filter_input(INPUT_POST, 'name')) {
        $errors['name'] = 'Nome é obrigatório';
    }

    if (filter_input(INPUT_POST, 'birth')) {
        $date = DateTime::createFromFormat('Y-m-d', $_POST['birth']);
        if (!$date) {
            $errors['birth'] = 'Nascimento deve estar no formato dd/mm/aaaa';
        }
    } else {
        $errors['birth'] = 'Nascimento é obrigatório';
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
    if (!filter_input(INPUT_POST, 'children', FILTER_VALIDATE_INT, $childrenConfig) && $_POST['children'] != 0) {
        $errors['children'] = 'Quantidade de filhos inválida (0-20)';
    }

    $salaryConfig = ['options' => ['decimal' => ',']];
    if (!filter_input(INPUT_POST, 'salary', FILTER_VALIDATE_FLOAT, $salaryConfig)) {
        $errors['salary'] = 'Salário inválido';
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

<form action="#" method="post">
  <div class="row">
    <div class="form-group col-md-9">
      <label for="name">Nome</label>
      <input type="text"
       name="name" 
       id="name"
       class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>"
       placeholder="Digite seu nome"
       value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>">
      <div class="invalid-feedback">
        <?= isset($errors['name']) ? $errors['name'] : '' ?>
      </div>
    </div>
    <div class="form-group col-md-3">
      <label for="birth">Nascimento</label>
      <input type="date"
       name="birth"
       id="birth"
       class="form-control <?= isset($errors['birth']) ? 'is-invalid' : '' ?>"
       placeholder="Digite sua data de nascimento"
       value="<?= isset($_POST['birth']) ? $_POST['birth'] : '' ?>">
      <div class="invalid-feedback">
        <?= isset($errors['birth']) ? $errors['birth'] : '' ?>
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
       value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
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
       value="<?= isset($_POST['site']) ? $_POST['site'] : '' ?>">
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
       value="<?= isset($_POST['children']) ? $_POST['children'] : '' ?>">
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
       value="<?= isset($_POST['salary']) ? $_POST['salary'] : '' ?>">
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
       value="<?= isset($_POST['salary']) ? $_POST['salary'] : '' ?>">
      <div class="invalid-feedback">
        <?= isset($errors['salary']) ? $errors['salary'] : '' ?>
      </div>
    </div>-->
  </div>
  <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
</form>