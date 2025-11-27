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
    $realNum = round($chosenNum, 0);
    $fracNum = $chosenNum - $realNum;
    echo "<p>Analisando o número $chosenNum informado pelo usuário:</p>";
    echo "<section> <ul><li>A parte inteira do número é $realNum </li>";
    echo "<li>A parte fracionária do número é $fracNum </li> </ul> </section>";
    ?>

    <button onclick="javascript:history.go(-1)">Voltar para o inicio</button>
  </main>

</body>

</html>