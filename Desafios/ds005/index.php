<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 6</title>
</head>

<body>
  <?php
  $dividendo = $_GET['v1'] ?? 0;
  $divisor = $_GET['v2'] ?? 0;
  ?>
  <main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="v1">Dividendo</label>
      <input value="<?= $dividendo ?>" type="number" name="v1" id="v1">
      <label for="v2">Divisor</label>
      <input value="<?= $divisor ?>" type="number" name="v2" id="v2">
      <input type="submit" value="Dividir">
    </form>
  </main>

  <section>
    <h2>Estrutura da divisão</h2>
    <table class="divisao">
      <tr>
        <td><?= $dividendo ?></td>
        <td><?= $divisor ?></td>
      </tr>
      <tr>
        <td>
          <?= $dividendo % $divisor ?>
        </td>
        <td><?= floor($dividendo / $divisor) ?></td>
      </tr>
    </table>
  </section>
</body>

</html>