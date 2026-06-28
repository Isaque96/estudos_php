<div class="title">Array</div>

<?php
$list = array(1, 2, 3.4, 'text');

echo $list . '<br>';
var_dump($list);
echo '<br>';
print_r($list);

$list[0] = 1234;
print_r($list);

echo '<br>' . $list[0];
echo '<br>' . $list[1];
echo '<br>' . $list[2];
echo '<br>' . $list[3];
echo '<br>';
var_dump($list[4]);

$text = 'Esse é um texto de teste';
echo '<br>' . $text[0];
echo '<br>' . $text[2];
echo '<br>' . $text[11]; // warning
echo '<br>' . mb_substr($text, 10, 1);
?>