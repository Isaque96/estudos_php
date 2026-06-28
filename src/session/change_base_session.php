<?php

session_start();
print_r($_SESSION);
?>

<p>
  <b>Nome: </b> <?= $_SESSION['nome']?><br>
  <b>Email: </b> <?= $_SESSION['email']?>
</p>

<?php
$_SESSION['email'] = 'isaqueschuwarte@gmail.com';
?>

<p>
  <a href="session_bases.php">Voltar</a>
</p>

<p>
  <a href="clean_base_session.php">Limpar Sessão</a>
</p>