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
    <h1>Resultado Final</h1>
    <?php
    $ch = curl_init();
    $api_url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='11-26-2025'&\$top=10&\$format=json&\$select=cotacaoCompra";

    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
      $error_msg = curl_error($ch);
      echo "Erro cURL: " . $error_msg;
    }
    $usdCurrency = 0;
    if ($response) {
      $data = json_decode($response, true);
      $cotacaoCompra = $data["value"][0]["cotacaoCompra"];
      $usdCurrency = $cotacaoCompra;
    } else {
      echo "Falha ao receber resposta.";
    }
    $chosenNum = $_GET["numero"];
    $convertedNum = round($chosenNum / $usdCurrency, 2);
    
    echo "<p>Seus R$ $chosenNum equivalem a <strong> US$ $convertedNum </strong> </p>";
    ?>
    <p>*Cotação obtida diretamente do site <a href="https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos">Banco Central do Brasil</a></p>
    <button onclick="javascript:history.go(-1)">Voltar para o inicio</button>
  </main>

</body>

</html>