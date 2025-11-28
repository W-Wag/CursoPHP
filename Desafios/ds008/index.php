<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 9</title>
</head>

<body>
  <?php
  $num = $_GET['v1'] ?? 0;
  $peso1 = $_GET['v2'] ?? 1;
  $num2 = $_GET['v3'] ?? 0;
  $peso2 = $_GET['v4'] ?? 1;
  ?>
  <main>
    <h1>Médias Aritméticas</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="v1">1° Valor</label>
      <input value="<?= $num ?>" type="number" name="v1" id="v1">

      <label for="v2">1° Peso</label>
      <input value="<?= $peso1 ?>" type="number" name="v2" id="v2">

      <label for="v3">2° Valor</label>
      <input value="<?= $num2 ?>" type="number" name="v3" id="v3">

      <label for="v4">2° Peso</label>
      <input value="<?= $peso2 ?>" type="number" name="v4" id="v4">

      <input type="submit" value="Calcular">
    </form>
  </main>

  <section>
    <h2>Cálculo das médias</h2>
    <p>analisando os valores <strong><?= $num ?> e <?= $num2 ?></strong>, temos:</p>
    <ul>
      <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong><?= number_format(($num + $num2) / count([$num, $num2]), 2) ?></strong></li>
      <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?= $peso1 ?> e <?= $peso2 ?> é igual a <strong><?= number_format((($num * $peso1) + ($num2 * $peso2)) / ($peso1 + $peso2), 2)?></strong></li>
    </ul>
  </section>
</body>

</html>