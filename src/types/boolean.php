<div class="title">Tipo Booleano</div>

<?php
echo true;
echo '<br>';
echo false;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// fazer as regras de conversão
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas 0 é false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.00000001);
echo '<br>' . var_dump((bool) ""); // false
echo '<br>' . var_dump((bool) "0"); // false
echo '<br>' . var_dump((bool) "00"); // todo resto é true
echo '<br>' . var_dump((bool) " ");
echo '<br>' . var_dump((bool) "false");

// igual javascript
echo '<br>' . var_dump(!!"");
?>