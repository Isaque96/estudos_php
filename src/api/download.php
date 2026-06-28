<div class="title">Download de Arquivo</div>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$files = $_SESSION['files'] ?? [];
$uploadedFolder = '/../uploads/';
$fileName = $_FILES['file']['name'];
$file = $uploadedFolder . $fileName;
$temp = $_FILES['file']['tmp_name'];

if (move_uploaded_file($temp, $file)) {
    echo "<p>Arquivo enviado com sucesso!</p>";
    $files[] = $fileName;
    $_SESSION['files'] = $files;
} else {
    echo "<p>Erro ao enviar o arquivo.</p>";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit">Enviar Arquivo</button>
</form>

<ul>
  <?php foreach ($files as $file): ?>
    <li> <a href="<?= $file ?>" target="_blank">Baixar</a> <?= htmlspecialchars($file) ?></li>
  <?php endforeach; ?>
</ul>

<style>
  input, button {
    font-size: 1.2rem;
  }
</style>