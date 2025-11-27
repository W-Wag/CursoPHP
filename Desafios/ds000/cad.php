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
    $antNum = $chosenNum - 1;
    $sucNum = $chosenNum + 1;
    echo "<p>O número escolhido foi $chosenNum </p>";
    echo "<p>O seu antecessor é $antNum </p>";
    echo "<p>O seu sucessor é $sucNum </p>"
    ?>

    <button onclick="javascript:history.go(-1)">Voltar para o inicio</button>
  </main>

</body>

</html>