<?php
session_start();

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$users = [
  [
    'email' => 'teste@teste.com',
    'password' => '123456',
    'name' => 'Testerson'
  ],
  [
    'email' => 'isaque_schuwarte@hotmail.com',
    'password' => '123456',
    'name' => 'Isaque Schuwarte'
  ]
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $_SESSION['errors'] = $errors;

    if (empty($email)) {
        $errors[] = "O campo de email é obrigatório.";
    }

    if (empty($password)) {
        $errors[] = "O campo de senha é obrigatório.";
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: index.php");
        exit();
    }

    // Verificar credenciais
    $user = null;
    foreach ($users as $u) {
        if ($u['email'] === $email && $u['password'] === $password) {
            $user = $u;
            break;
        }
    }

    if ($user) {
        $_SESSION['user'] = $user['name'];
        $exp = time() + 60 * 60 * 24 * 30; // 30 dias
        setcookie('user', $user['name'], $exp);
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['errors'] = ["Email ou senha inválidos."];
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <title>Curso PHP</title>
  </head>
  <body class="login">
    <header class="header">
      <h1>Curso PHP</h1>
      <h2>Seja bem-vindo!</h2>
    </header>
    <nav class="navigation">
    </nav>
    <main class="main">
      <div class="content">
        <h3>Identifique-se</h3>
        <?php if (isset($_SESSION['errors'])): ?>
          <div class="errors">
            <?php foreach ($_SESSION['errors'] as $error): ?>
              <p><?= $error ?></p>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <form action="#" method="post">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required />
          </div>
          <button type="submit">Entrar</button>
        </form>
      </div>
    </main>
    <footer class="footer">ISS Soluções © <?= date("Y"); ?></footer>
  </body>
</html>
