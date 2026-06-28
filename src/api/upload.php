<div class="title">Upload de Arquivo</div>

<?php
print_r($_FILES);

if ($_FILES && $_FILES['file']) {
    $folder = "C:\Users\Isaque Schuwarte\Desktop";
    $fileName = $_FILES['file']['name'];
    $file = $folder . DIRECTORY_SEPARATOR . $fileName;
    $tmp = $_FILES['file']['tmp_name'];

    echo "<p>Arquivo: $file</p><br/>";
    if (move_uploaded_file($tmp, $file)) {
        echo "<p>Arquivo válido e enviado com sucesso.</p>";
    } else {
        echo "<p>Arquivo inválido ou não enviado.</p>";
    }
}
?>

<form action="#" method="post" enctype="multipart/form-data">
  <input type="file" name="file">
  <button>Enviar</button>
</form>

<style>
  input, button {
    font-size: 1.2rem;
  }
</style>