<div class="title">While/Do While</div>

<?php
const VALOR_LIMITE = 5;
$count = 0;

while ($count < VALOR_LIMITE) {
    echo "while $count<br>";
    $count++;
}

echo '<hr>';

$count = 100;
do {
    echo "do-while $count<br>";
} while ($count < VALOR_LIMITE);

echo '<hr>';

$count = 0;
while (true) {
    echo "while(true)<br>";
    $count++;
    if ($count >= VALOR_LIMITE) {
        break;
    }
}
?>