<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/archivos.css">
    <title>Subida de articulos - Piniors</title>
</head>
<body>
<?php include("view/includes/header.php") ?>
<?php
$message = isset($_GET["message"]) ? $_GET['message'] : '';
$error = isset($_GET["code"]) ? ($_GET["code"] == "1" ? true : false) : null;
if ($error) {
    echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
  <strong class="font-bold">🚨 Upsss!</strong>
  <span class="block sm:inline">' . $message . '</span></div>';
} else if ($error != null) {
    echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
  <strong class="font-bold">😜</strong>
  <span class="block sm:inline">Tu archivo se ha subido con exito!' . $error . '</span></div>';
}

?>

<form action="/blog/uploadArticle" method="POST" enctype="multipart/form-data">
    <h1>Ingresa tu articulo en Markdown</h1>
    <input placeholder="Ingresa el titulo de tu articulo" type="text" name="title" id="title">
    <label  class="drop-zone" for="archivo">Sube tu articulo</label>
    <input hidden type="file" name="archivo" id="archivo" accept=".md">
    <button id="submit" type="submit">Subir articulo</button>
</form>
<?php include("view/includes/footer.php") ?>