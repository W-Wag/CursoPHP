<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Super Globais</title>
</head>
<body>
  <main>
    <pre>
      <?php 
        setcookie("dia-da-semana", "QUINTA", time() + 3600);
        session_start();
        $_SESSION["teste"] = "Funcionou!";

        echo "<h1>SuperGlobal GET </h1>";
        var_dump($_GET);


        echo "<h1>SuperGlobal POST </h1>";
        var_dump($_POST);
        
        
        echo "<h1>SuperGlobal Request </h1>";
        var_dump($_REQUEST);
        
        
        echo "<h1>SuperGlobal COOKIE </h1>";
        var_dump($_COOKIE);
        
        
        echo "<h1>SuperGlobal SESSION </h1>";
        var_dump($_SESSION);
        
        
        echo "<h1>SuperGlobal ENV </h1>";
        var_dump($_ENV);
        
        
        echo "<h1>SuperGlobal SERVER </h1>";
        var_dump($_SERVER);


        echo "<h1>SuperGlobal GLOBALS </h1>";
        var_dump($GLOBALS);

      ?>
    </pre>
  </main>
</body>
</html>