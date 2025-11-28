<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 12</title>
</head>

<body>
  <?php
  $segundos = $_GET['v1'] ?? 0;
  ?>
  <main>
    <h1>Calculadora de tempo</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="v1">Qual é o total de segundos?</label>
      <input value="<?= $segundos ?>" type="number" name="v1" id="v1">

      <input type="submit" value="Calcular">
    </form>
  </main>

  <section>
    <h2>Totalizando tudo</h2>
    <p>Analisando o valor que você digitou, <strong><?= $segundos ?> segundos</strong> equivalem a um total de:</p>
    <ul>
      <li><?= number_format(($segundos / 60) / 60 / 24 / 7, 1) ?> semanas</li>
      <li><?= number_format(($segundos / 60) / 60 / 24, 1) ?> dias</li>
      <li><?= number_format(($segundos / 60) / 60 , 1)?> horas</li>
      <li><?= number_format($segundos / 60, 1) ?> minutos</li>
      <li><?= number_format($segundos, 0) ?> segundos</li>
    </ul>
  </section>
</body>

</html>