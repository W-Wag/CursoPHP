<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 11</title>
</head>

<body>
  <?php
  $preco = $_GET['v1'] ?? 0;
  $porcentagem = $_GET['v2'] ?? 0;
  $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY)
  ?>
  <main>
    <h1>Reajustador de Preços</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="v1">Preço do produto? (R$)</label>
      <input value="<?= $preco ?>" type="number" name="v1" id="v1">
      <label id="labelPorcentagem" for="v2">Qual será percentual de reajuste? (<?= $porcentagem ?>%)</label>
      <input value="<?= $porcentagem ?>" type="range" name="v2" id="v2" min="0" max="100" oninput="atualizarLabel(this.value)">
      <input type="submit" value="Reajustar?">
    </form>
  </main>

  <section>
    <h2>Resultado do Reajuste</h2>
    <p>O produto que custava <?= numfmt_format_currency($padrao, $preco, "BRL") ?>, com <strong><?= $porcentagem ?>% de aumento</strong> vai passar <br> a custar <strong><?= numfmt_format_currency($padrao, ($porcentagem / 100) * $preco + $preco, "BRL") ?></strong></p>
  </section>


  <script>
    function atualizarLabel(value) {
      const label = document.getElementById("labelPorcentagem")

      label.textContent = `Qual será percentual de reajuste? (${value} %)`
    }
  </script>
</body>

</html>