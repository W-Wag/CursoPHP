<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
      <h1>Trabalhando com números aleatórios</h1>
      <p>Gerando um número aleatório entre 0 e 100</p>
      <?php 
        $randNum = rand(0, 100);
        echo "<p> O valor gerado foi $randNum </p>";
      ?>
      <button onclick="javascript:window.location.reload()">Gerar outro</button>
    </main>
</body>
</html>