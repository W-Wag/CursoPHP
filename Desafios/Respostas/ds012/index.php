<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 13</title>
  <style>
    img.nota {
      height: 50px;
      width: 150px;
      margin: 5px;
    }
  </style>
</head>

<body>
  <?php
  $saque = $_GET['v1'] ?? 0;
  $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY)
  ?>
  <main>
    <h1>Caixa Eletrônico</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="v1">Qual valor deseja sacar?</label>
      <input value="<?= $saque ?>" type="number" name="v1" id="v1" step="5">

      <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10, R$5</p>
      <input type="submit" value="Sacar">

    </form>
  </main>

  <section>
    <h2>Saque de <?= numfmt_format_currency($padrao, $saque, "BRL") ?></h2>
    <p>O caixa eletrônico vai te entragas as seguintes notas:</p>
    <?php
    $resto = $saque;
    $tot100 = floor($resto / 100);
    $resto %= 100;
    $tot50 = floor($resto / 50);
    $resto %= 50;
    $tot10 = floor($resto / 10);
    $resto %= 10;
    $tot5 = floor($resto / 5);
    $resto %= 5;
    ?>
    <ul>
      <li><img class="nota" src="100reais.jpg" alt="100 reais"> x <?= $tot100 ?></li>
      <li><img class="nota" src="50reais.png" alt="50 reais"> x <?= $tot50 ?></li>
      <li><img class="nota" src="10reais.jpg" alt="10 reais"> x <?= $tot10 ?></li>
      <li><img class="nota" src="5reais.jpg" alt="5 reais"> x <?= $tot5 ?></li>
    </ul>
  </section>
</body>

</html>