<div class="title">Operações</div>

<?php
$data = [
  'nome' => 'Jose',
  'idade' => 28
];

$data2 = [
  'naturalidade' => 'Fortaleza'
];

$allData = $data + $data2;
print_r($allData);

echo '<br>' . is_array($allData);
echo '<br>' . count($allData);
echo '<br>';

$idx = array_rand($allData);
echo "$idx = $allData[$idx]";
echo '<br>';
echo "{$allData['idade']}";
echo '<br>';
// echo "${allData['idade']}"; depreciado

unset($allData['nome']);
echo '<br>';
print_r($allData);

unset($allData);
echo '<br>';
var_dump($allData);

$odds = [1, 3, 5, 7, 9];
$pairs = [0, 2, 4, 6, 8];

$decimals = $pairs + $odds;
echo '<br>';
print_r($decimals);

$decimals = array_merge($pairs, $odds);
echo '<br>';
print_r($decimals);
echo '<br>';
sort($decimals);
print_r($decimals);
?>