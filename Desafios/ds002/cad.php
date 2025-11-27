<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado final</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1>Resultado Final</h1>
    <?php
    $chosenNum = $_GET["numero"];
    $convertedNum = round($chosenNum / 5.33, 2);
    echo "<p>Seus R$ $chosenNum equivalem a <strong> US$ $convertedNum </strong> </p>";
    ?>
    <p>*<strong>Cotação fixa de R$5,33</strong>  informada diretamente no código</p>
    <button onclick="javascript:history.go(-1)">Voltar para o inicio</button>
  </main>

</body>

</html>