<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 10</title>
</head>

<body>
  <?php
  $nasc = $_GET['v1'] ?? 2000;
  $ano = $_GET['v2'] ?? date("Y");
  $atual = date("Y")
  ?>
  <main>
    <h1>Calculando a sua idade</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="v1">Em que ano você nasceu?</label>
      <input value="<?= $nasc ?>" type="number" name="v1" id="v1" max="<?= $atual ?>">
      <label for="v1">Quer saber sua idade em que ano? (atualmente estamos em <?= $atual ?>)</label>
      <input value="<?= $ano ?>" type="number" name="v2" id="v2">
      <input type="submit" value="Qual será minha idade?">
    </form>
  </main>

  <section>
    <h2>Resultado</h2>
    <p>Quem nasceu em <strong><?= $nasc ?></strong> vai ter <strong><?= $ano - $nasc ?></strong> em <strong><?= $ano ?></strong>!</p>
  </section>
</body>

</html>