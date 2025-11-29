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
  $dividendo = $_GET['d1'] ?? 0;
  $divisor = $_GET['d2'] ?? 1;
  ?>
  <main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="d1">Dividendo</label>
      <input value="<?= $dividendo ?>" type="number" name="d1" id="d1">
      <label for="d2">Divisor</label>
      <input value="<?= $divisor ?>" type="number" name="d2" id="d2" min="1">
      <input type="submit" value="Analisar">
    </form>
  </main>

  <section>
    <h2>Estrutura da divisão</h2>
    <?php 
      $quociente = intdiv($dividendo, $divisor);
      $resto = $dividendo % $divisor;
    ?>

    <table class="divisao">
      <tr>
        <td><?= $dividendo ?></td>
        <td><?= $divisor ?></td>
      </tr>
      <tr>
        <td>
          <?= $resto ?>
        </td>
        <td><?= $quociente ?></td>
      </tr>
    </table>
  </section>
</body>

</html>