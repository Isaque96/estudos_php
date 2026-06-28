<div class="title">Operadores Lógicos</div>

<p>V ou F</p>
<?php
var_dump(true);
echo '<br>';
var_dump(!true);
echo '<br>';
?>

<hr></head><p>Tabela Verdade 'AND' (E)</p><hr>
<?php
var_dump(true && true);
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && true);
echo '<br>';
var_dump(false && false);
echo '<br>';

var_dump(true and true);
echo '<br>';
var_dump(true and false);
echo '<br>';
var_dump(false and true);
echo '<br>';
var_dump(false and false);
echo '<br>';
?>

<hr><p>Tabela Verdade 'OR' (OU)</p><hr>
<?php
var_dump(true || true);
echo '<br>';
var_dump(true || false);
echo '<br>';
var_dump(false || true);
echo '<br>';
var_dump(false || false);
echo '<br>';

var_dump(true or true);
echo '<br>';
var_dump(true or false);
echo '<br>';
var_dump(false or true);
echo '<br>';
var_dump(false or false);
echo '<br>';
?>

<hr><p>Tabela Verdade 'XOR' (OU EXCLUSIVO)</p><hr>
<?php
var_dump(true xor true);
echo '<br>';
var_dump(true xor false);
echo '<br>';
var_dump(false xor true);
echo '<br>';
var_dump(false xor false);
echo '<br>';

var_dump(true != true);
echo '<br>';
var_dump(true != true);
echo '<br>';
var_dump(true != true);
echo '<br>';
var_dump(true != true);
echo '<br>';
?>

<hr><p class="division">Exemplo</p><hr>
<?php
$age = 62;
$gender = 'F';

$paidSocialSecurity = true;
$maleCriteria = $age >= 65 && $gender === 'M';
$femaleCriteria = $age <= 60 && $gender === 'F';
$hitCriteria = $maleCriteria || $femaleCriteria;
$canRetire = $paidSocialSecurity && $hitCriteria;

if ($age <= 60 && $gender === 'F') {
    echo "Pode aposentar -> $gender";
} elseif ($age >= 65 && $gender === 'M') {
    echo "Pode aposentar -> $gender";
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}
?>