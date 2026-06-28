<div class="title">Desafio Laço For</div>

<!--
#
##
###
####
#####
-->
<?php
for ($cont = 1; $cont <= 5; $cont++) {
    if (!isset($p)) {
        $p = '';
    }

    $p .= '#';
    echo "$p<br>";
}

echo '<hr>';

for ($i = 0, $c = '#'; $i < 5; $i++, $c .= '#') {
    echo "$c<br>";
}

echo '<hr>';

for ($c = '#'; $c !== '######'; $c .= '#') {
    echo "$c<br>";
}
?>