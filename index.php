<?php
$paragrafoPagina = "Il mio primo paragrafo in PHP.";
$lunghezza = strlen($paragrafoPagina);

$parolaCensurata = $_GET["chiave"];
$nuovoParagrafo = str_replace($parolaCensurata, "***", $paragrafoPagina);
$lunghezzaParola = strlen($nuovoParagrafo)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-BADWORDS</title>
</head>
<body>
  <main>
    <p><?php echo $paragrafoPagina . ' ' . $lunghezza ?></p>
    <p><?php echo $parolaCensurata ?></p>
    <p><?php echo $nuovoParagrafo . ' ' . $lunghezzaParola ?></p>
  </main>
  
</body>
</html>
