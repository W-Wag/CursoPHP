<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado final</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1>Conversor de Moedas v1.0</h1>
    <?php
    $real = $_GET["numero"];
    $cotacao = 5.33;
    $dolar = $real / $cotacao;
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    // echo "<p>Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a <strong> US\$" . number_format($dolar, 2, ",", ".") . "</strong> </p>"; -- formatação tradicional
    echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong> </p>";
    echo "<p>*<strong>Cotação fixa de " . numfmt_format_currency($padrao, $cotacao, "BRL") . "</strong> informada diretamente no código</p>"
    ?>
    
    <button onclick="javascript:history.go(-1)">Voltar para o inicio</button>
  </main>

</body>

</html>