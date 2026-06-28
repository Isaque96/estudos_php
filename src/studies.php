<?php session_start() ?>

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
    <link rel="stylesheet" href="assets/css/studies.css" />
    <title>Exercícios PHP</title>
  </head>
  <body class="study">
    <header class="header">
      <h1>Curso PHP</h1>
      <h2>Visualização do Execício</h2>
    </header>
    <nav class="navigation">
      <span class="user">Usuário: <?= $_SESSION["user"] ?></span>
      <a href=<?= "{$_GET["dir"]}/{$_GET["file"]}.php" ?>>Sem formatação</a>
      <a href="index.php" class="green">Voltar</a>
      <a href="logout.php" class="red">Sair</a>
    </nav>
    <main class="main">
      <div class="content">
        <?php include("{$_GET["dir"]}/{$_GET["file"]}.php"); ?>
      </div>
    </main>
    <footer class="footer">ISS Soluções © <?= date("Y"); ?></footer>
  </body>
</html>
