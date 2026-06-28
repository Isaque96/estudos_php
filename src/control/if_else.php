<div class="title">If Else</div>

<?php
if (true) {
    echo 'Serei impresso?<br>';
}

if (true) {
    echo 'Verdadeiro - Parte A<br>';
    echo 'Verdadeiro - Parte B<br>';
} else {
    echo 'Falo - Parte A<br>';
    echo 'Falo - Parte B<br>';
}

if (false) {
    echo 'Passo A<br>';
} elseif (false) {
    echo 'Passo B<br>';
} elseif (false) {
    echo 'Passo C<br>';
} elseif (true) {
    echo 'Passo D<br>';
} elseif (true) {
    echo 'Passo E<br>';
} else {
    echo 'Último Passo<br>';
}

echo 'Fim<br>'
?>