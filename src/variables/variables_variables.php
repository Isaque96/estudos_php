<div class="title">Variáveis Variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a} $valorA"; # Foi depreciado na versão 8 do PHP

echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!';
echo "$epa {$$epa} {$$$epa}";
?>