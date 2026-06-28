<div class="title">Desafio Tabela #02</div>

<form action="#" method="post">
  <div>
    <label for="row">Linha</label>
    <input type="number" name="row" value="<?=$_POST['row'] ?? 4?>" />
  </div>
  <div>
    <label for="col">Coluna</label>
    <input type="number" name="col" value="<?=$_POST['col'] ?? 5?>" />
  </div>
  <button>Gerar Tabela</button>
</form>

<table>
    <?php
    $col = (int) ($_POST['col'] ?? 5);
    $row = (int) ($_POST['row'] ?? 4);
    $digits = strlen((string) ($row * $col));

    for ($i = 0; $i < $row; $i++) {
        $bg = $i % 2 ? '#f0f0f0' : '#d0d0d0';
        echo "<tr style='background-color: $bg;'>";
        for ($j = 0; $j < $col; $j++) {
            $num = $i * $col + $j + 1;
            echo '<td>' . str_pad($num, $digits, '0', STR_PAD_LEFT) . '</td>';
        }
        echo '</tr>';
    }
    ?>
</table>


<style>
  form > * {
    font-size: 1.8rem;    
  }

  form > div {
    margin-bottom: 10px;
  }

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