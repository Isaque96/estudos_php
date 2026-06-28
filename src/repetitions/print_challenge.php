<div class="title">Desafio Impressão</div>

<?php
$arr = [
  'AAA',
  'BBB',
  'CCC',
  'DDD',
  'EEE',
  'FFF'
];

$print = '';
foreach ($arr as $idx => $val) {
    if ($idx % 2 === 0) {
        $print .= "$val, ";
    }
}
echo trim($print, ', ');

echo '<hr>';

$print = '';
for ($i = 0; $i < count($arr); $i++) {
    if ($i % 2 === 0) {
        $print .= "{$arr[$i]}, ";
    }
}
echo trim($print, ', ');
?>