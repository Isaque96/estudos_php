<div class="title">Valor VS Referência</div>

<?php
$var = 'valor inicial';
echo $var;

// Atribuição por Valor
$varV = $var;
echo '<br>', $varV;
$varV = 'novo valor';
echo '<br>', $var;
echo " $varV";

// Atribuição por Referência
$varR = &$var;
$varR = 'mesma referência';
echo "<br> $var $varR";
?>