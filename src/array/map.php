<div class="title">Mapa</div>

<?php
$data = array(
  'idade' => 25,
  'cor' => 'verde',
  'peso' => 49.8
);

print_r($data);

var_dump($data[0]);
echo '<br>' . $data['idade'];
echo '<br>' . $data['cor'];
echo '<br>' . $data['peso'];
echo '<br>';
var_dump($data['outra_informacao']);

$list = array(
  'a',
  'cinco' => 'b',
  'c',
  8 => 'd',
  'e',
  6 => 'f',
  'g',
  8 => 'h'
);

echo '<br>';
print_r($list);

$list[] = 'i';
echo '<br>';
print_r($list);

$list['vinte'] = 'j';
echo '<br>';
print_r($list);

$list[false] = 'tentei indexar com false'; // assume o indice 0
echo '<br>';
print_r($list);

$list[true] = 'tentei indexar com true'; // assume o indice 1
echo '<br>';
print_r($list);
?>