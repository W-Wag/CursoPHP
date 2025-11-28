<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Formulários Retroalimentados</title>
</head>
<body>
    <?php 
      $valor1 = $_GET['v1'] ?? 0;
      $valor2 = $_GET['v2'] ?? 0;
    ?>
  <main>
     <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="v1">Valor 1</label>
      <input value="<?= $valor1 ?>" type="number" name="v1" id="v1">
      <label for="v2">Valor 2</label>
      <input value="<?= $valor2 ?>" type="number" name="v2" id="v2">
      <input type="submit" value="Somar">
     </form>
  </main>

  <section>
    <h2>Resultado da Soma</h2>
    <?php 
      $soma = $valor1 + $valor2;
      echo "<p>A soma entre os valores $valor1 e $valor2 é <strong>igual a $soma</strong></p>";
    ?>
  </section>
</body>
</html>