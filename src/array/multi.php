<div class="title">Multidimensionais</div>

<?php
$datas = [
  [
    'name' => 'Roberto',
    'idade' => 26,
    'naturalidade' => 'São Paulo'
  ],
  [
    'name' => 'Roberto',
    'idade' => 26,
    'naturalidade' => 'São Paulo'
  ]
];

print_r($datas);
echo '<br>' . $datas[0]['idade'];
echo '<br>' . $datas[1]['idade'];

$datas[] = [
  'name' => 'Roberto',
  'idade' => 26,
  'naturalidade' => 'São Paulo'
];

echo '<br>';
print_r($datas);
echo '<br>' . $datas[2]['idade'];

$datas[2]['vizinho'] = 'Chaves';
echo '<br>';
print_r($datas[2]);

unset($datas[1]);
echo '<br>';
print_r($datas);
?>