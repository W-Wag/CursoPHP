<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Tipos Primitivos</h1>
    <?php 
      // $num = 0100;
      // echo "o valor da variável é $num"

      // $var = 300;
      // var_dump($var);

      // $num = (integer) 3e2; // 3 x 10(2) coerção
      // echo "o valor da variável é $num";

      // $num =(int) "950";
      // var_dump($num);

      // $vet = [5, 20, 9, 3, 5];
      // var_dump($vet);

      class Pessoa {
        public string $nome;

        public function set_nome($nome) {
          $this->nome = $nome;
        }
        public function get_nome() {
          return $this->nome;
        }
      }

      $p = new Pessoa;
      $p->set_nome("Luiz Fabiano");
      echo $p->get_nome();
      
    ?>
</body>
</html>