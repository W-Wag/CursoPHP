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
  $valor1= $_GET['v1'] ?? 0;
  $peso1 = $_GET['p1'] ?? 1;
  $valor2 = $_GET['v2'] ?? 0;
  $peso2 = $_GET['p2'] ?? 1;
  ?>
  <main>
    <h1>Médias Aritméticas</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="v1">1° Valor</label>
      <input value="<?= $valor1?>" type="number" name="v1" id="v1" required>

      <label for="p1">1° Peso</label>
      <input value="<?= $peso1 ?>" type="number" name="p1" id="p1" min="1">

      <label for="v2">2° Valor</label>
      <input value="<?= $valor2 ?>" type="number" name="v2" id="v2" required>

      <label for="p2">2° Peso</label>
      <input value="<?= $peso2 ?>" type="number" name="p2" id="p2" min="1">

      <input type="submit" value="Calcular Médias">
    </form>
  </main>

  <section>
    <h2>Cálculo das médias</h2>
    <p>analisando os valores <strong><?= $valor1?> e <?= $valor2 ?></strong>, temos:</p>
    <?php 
      $ma = ($valor1 + $valor2) / 2;
      $mp = ($valor1 * $peso1 + $valor2 * $peso2) /($peso1 + $peso2)
    ?>
    <ul>
      <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong><?= number_format($ma, 2, ',', '.') ?></strong></li>
      <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?= $peso1 ?> e <?= $peso2 ?> é igual a <strong><?= number_format($mp, 2, ',', '.')?></strong></li>
    </ul>
  </section>
</body>

</html>