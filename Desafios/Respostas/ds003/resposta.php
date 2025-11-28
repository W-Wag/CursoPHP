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
    <h1>Conversor de Moedas v2.0</h1>
    <?php
      $inicio = date('m-d-Y', strtotime("-7 days"));
      $fim = date('m-d-Y');
      $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
      $dados = json_decode(file_get_contents($url), true);
      $real = $_GET["numero"];
      $cotacao = $dados["value"][0]["cotacaoCompra"];
      $dolar = $real / $cotacao;
      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

      echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong> </p>";
      echo "<p>*Cotação de <strong>" . numfmt_format_currency($padrao, $cotacao, "BRL") . "</strong> obtida diretamente do site <a href=\"https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos\">Banco Central do Brasil</a></p>"
    ?>

    <button onclick="javascript:history.go(-1)">Voltar para o inicio</button>
  </main>

</body>

</html>