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
  $total = $_GET['v1'] ?? 0;
  $sobra = $total;

  $semana = intdiv($sobra, 604_800);
  $sobra = $sobra % 604_800;

  $dia = intdiv($sobra, 86_400);
  $sobra = $sobra % 86_400;

  $hora = intdiv($sobra, 3_600);
  $sobra = $sobra % 3_600;

  $minuto = intdiv($sobra, 60);
  $segundos = $sobra % 60;
  ?>
  <main>
    <h1>Calculadora de tempo</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="v1">Qual é o total de total?</label>
      <input value="<?= $total ?>" type="number" name="v1" id="v1">

      <input type="submit" value="Calcular">
    </form>
  </main>

  <section>
    <h2>Totalizando tudo</h2>
    <p>Analisando o valor que você digitou, <strong><?= $total ?> total</strong> equivalem a um total de:</p>
    <ul>
      <li><?= number_format($semana, 1, ',', '.') ?> semanas</li>
      <li><?= number_format($dia, 1, ',', '.') ?> dias</li>
      <li><?= number_format($hora, 1, ',', '.')?> horas</li>
      <li><?= number_format($minuto, 1, ',', '.') ?> minutos</li>
      <li><?= number_format($segundos, 0) ?> segundos</li>
    </ul>
  </section>
</body>

</html>