<div class="title">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);

echo TAXA_DE_JUROS;
// echo '<br>' . $TAXA_DE_JUROS . '!'; # warning
// TAXA_DE_JUROS = 2.5; # erro

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$varV = 2.8;
// define('NOVISSIMA_TAXA', $varV); # erro - talvez apenas na versão 8
// const NOVISSIMA_TAXA = $varV; # erro
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;
echo '<br>' . PHP_VERSION;

echo '<br> Linha: ' . __LINE__;
echo '<br> Arquivo: ' . __FILE__;
echo '<br> Diretório: ' . __DIR__;
?>