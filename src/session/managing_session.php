<div class="div title">Gerenciamento de Sessão</div>

<?php
// Consegue setar qual sessão queremos, mas não é recomendado, pois pode gerar problemas de segurança
// session_id("");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

echo session_id() . "<br>";

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo "Contador: " . $contador . "<br>";

if ($_SESSION["contador"] % 5 === 0) {
    session_regenerate_id();
}

if ($_SESSION["contador"] >= 15) {
    session_destroy();
}
