<div class="title">Desafio Tabela #01</div>

<?php
$arr = [
  ['01', '02', '03', '04', '05'],
  ['06', '07', '08', '09', '10'],
  ['11', '12', '13', '14', '15'],
  ['16', '17', '18', '19', '20']
];

echo '<table>';
foreach ($arr as $key => $value) {
    echo '<tr>';
    foreach ($value as $k => $v) {
        echo "<td>$v</td>";
    }
    echo '</tr>';
}
echo '</table>';
?>

<table>
  <?php
  foreach ($arr as $key => $value) {
      if ($key % 2 === 1) {
          echo '<tr style="background-color: #f0f0f0;">';
      } else {
          echo '<tr style="background-color: #d0d0d0;">';
      }
      foreach ($value as $k => $v) {
          echo "<td>$v</td>";
      }
      echo '</tr>';
  }
?>
</table>

<style>
  table {
    border: 1px solid #444;
    border-collapse: collapse;
    margin: 20px 0px;
  }

  table tr {
    border: 1px solid #444;
  }

  table td {
    border: 1px solid #444;
    padding: 10px 20px;
  }
</style>