<div class="title">Foreach</div>

<?php
$arr = [1000 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

foreach ($arr as $val) {
    echo "$val<br>";
}

echo '<hr>';

foreach ($arr as $idx => $val) {
    echo "[$idx] => $val<br>";
}

echo '<hr>';

$matrix = [
  ['a', 'e', 'i', 'o', 'u'],
  ['b', 'c', 'd']
];

foreach ($matrix as $line) {
    foreach ($line as $val) {
        echo "$val";
    }
    echo '<br>';
}

echo '<hr>';

$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as &$number) {
    $number *= 2;
    echo "$number<br>";
}
print_r($numbers);
?>