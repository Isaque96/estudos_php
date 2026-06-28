<div class="title">$_POST</div>

<form action="#" method="post">
  <input type="text" name="name" id="name">
  <input type="text" name="lastname" id="lastname">
  <select name="state" id="state">
    <option value="AC">Acre</option>
    <option value="BA">Bahia</option>
  </select>
  <button>Enviar</button>
</form>

<style>
  form > * {
    font-size: 1.8rem;
  }
</style>

<?php
print_r($_GET);
echo '<br>';
print_r($_POST);

echo '<br>' . count($_POST);
?>