<div class="title">Break/Continue</div>

<?php
$cont = 16;
for (;;) {
    echo "$cont<br>";
    $cont++;

    if ($cont > 20) {
        break;
    }
}

echo '<hr>';

for (;;) {
    $cont++;

    if ($cont % 2 === 1) {
        continue;
    }

    echo "$cont<br>";

    if ($cont >= 30) {
        break;
    }
}

echo '<hr>';

foreach (array(1, 2, 3, 4, 5, 6) as $val) {
    if ($val === 5) {
        break;
    }
    if ($val % 2 === 0) {
        continue;
    }

    echo "$val<br>";
}

echo '<hr>Fim!';
?>