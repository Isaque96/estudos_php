<div class="title">Sessão</div>

<?php
// Nas versões mais recente do PHP, a sessão tem que ser iniciada no arquivo em que o cabeçalho é disparado
session_start();

print_r($_SESSION);
echo '<br>';

if (!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Isaque';
}

if (!$_SESSION['email']) {
    $_SESSION['email'] = 'isaque_schuwarte@hotmail.com';
}

?>

<p><a href="/session/change_base_session.php">Alterar Sessão</a></p>