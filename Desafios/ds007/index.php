<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 8</title>
</head>

<body>
  <?php
  $num = $_GET['v1'] ?? 0;
  ?>
  <main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="v1">Informe um número</label>
      <input value="<?= $num ?>" type="number" name="v1" id="v1">
      <input type="submit" value="Calcular">
    </form>
  </main>

  <section>
    <h2>Resultado final</h2>
    <p>analisando o <strong>número <?= $num ?></strong>, temos:</p>
    <ul>
      <li>A sua raiz quadrada é <strong><?= number_format(sqrt($num), 3) ?></strong></li>
      <li>A sua raiz cúbica é <strong><?= number_format($num ** (1/3) , 3)?></strong></li>
    </ul>
  </section>
</body>

</html>