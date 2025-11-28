<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 13</title>
</head>

<body>
  <?php
  $din = $_GET['v1'] ?? 0;
  $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY)
  ?>
  <main>
    <h1>Caixa Eletrônico</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="v1">Qual valor deseja sacar?</label>
      <input value="<?= $din ?>" type="number" name="v1" id="v1" step="5">

      <fieldset>
        <legend>*Notas disponíveis: R$100, R$50, R$10, R$5</legend>
        <input type="submit" value="Sacar">
      </fieldset>

    </form>
  </main>

  <section>
    <h2>Saque de <?= numfmt_format_currency($padrao, $din, "BRL") ?></h2>
    <p>O caixa eletrônico vai te entragas as seguintes notas:</p>
    <ul>
      <li><img style="width: 100px; height: 50px;" src="100reais.jpg" alt="100 reais"> x <?= intdiv($din, 100) ?></li>
      <li><img style="width: 100px; height: 50px;" src="50reais.png" alt="50 reais"> x <?= intdiv($din - intdiv($din, 100) * 100, 50) ?></li>
      <li><img style="width: 100px; height: 50px;" src="10reais.jpg" alt="10 reais"> x <?= intdiv($din - intdiv($din, 50) * 50, 10) ?></li>
      <li><img style="width: 100px; height: 50px;" src="5reais.jpg" alt="5 reais"> x <?= intdiv($din - intdiv($din, 10) * 10, 5) ?></li>
    </ul>
  </section>
</body>

</html>