<div class="title">Desafio Sorteio</div>

<?php
$names = ['Elza', 'Rapunzel', 'Branca de Neve', 'Cinderela'];
$idx = array_rand($names);
echo "<div center><h1>$names[$idx]</h1></div>";
// echo "<h1><center>$names[$idx]</center></h1>";
?>

<style>
  [center] {
    display: flex;
    justify-content: center;
  }
</style>