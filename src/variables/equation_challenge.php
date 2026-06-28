<div class="title">Desafio Equação</div>

<?php
$aNumerator = (6 * (3 + 2)) ** 2;
$aDenominator = 3 * 2;

$bNumerator = (1 - 5) * (2 - 7);
$bDenominator = 2;

$aTop = $aNumerator / $aDenominator;
$bTop = ($bNumerator / $bDenominator) ** 2;

$top = ($aTop - $bTop) ** 3;
$bottom = 10 ** 3;

$final = $top / $bottom;

echo "O resultado final é " . $final . "."
?>