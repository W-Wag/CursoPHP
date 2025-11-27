<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <h1>Exemplo de PHP</h1>
  <?
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é dia " . date("d/M/Y");
    echo " e a hora atual " . date("G:i:s");
  ?>
</body>
</html>