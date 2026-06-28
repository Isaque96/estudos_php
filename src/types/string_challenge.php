<div class="title">Desafio String</div>

<?php
echo strpos("!AbcaBcabc", "abc") . '<br>';
echo stripos("!AbcaBcabc", "abc") . '<br>';
echo strpos(strtolower("!AbcaBcabc"), strtolower("abc"));
?>