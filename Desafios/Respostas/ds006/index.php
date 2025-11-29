<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 7</title>
</head>

<body>
  <?php
  $minSalario = 1518;
  $salario = $_GET['v1'] ?? $minSalario;

  $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY)
  ?>
  <main>
    <h1>Informe o seu salário</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="v1">Informe seu salário</label>
      <input value="<?= $salario ?>" type="number" name="v1" id="v1" min="<?= $minSalario ?>">
      <p>Considerando o salário mínimo de <strong><?= numfmt_format_currency($padrao, $minSalario, "BRL") ?></strong></p>
      <input type="submit" value="Calcular">
    </form>
  </main>

  <section>
    <h2>Resultado final</h2>
    <?php
    $total = intdiv($salario, $minSalario);
    $restante = $salario % $minSalario
    ?>
    <p>Quem recebe um salario de <?= numfmt_format_currency($padrao, $salario, "BRL") ?> ganha <strong><?= $total ?> salários mínimos</strong> + <?= numfmt_format_currency($padrao, $restante, "BRL") ?></p>
  </section>
</body>

</html>