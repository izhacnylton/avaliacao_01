<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo 01 - avaliação 01</title>
</head>
<body>
    <?php 
    echo "AVALIAÇÃO 01: Programação Orientada a Objetos <br><br>";
    class Carro{
        public $marca;
        public $modelo;
        public $ano;
        public $cor;
        public $velocidade = 0;

        public function acelerar(){
            $this -> velocidade += 10;
            echo "O Carro Acelerou. Velocidade:  " . $this -> velocidade . " Km/h <br>";
        }

        public function frear(){
            if($this -> velocidade >= 10){
                $this -> velocidade -= 10;
            }
            echo "O carro freou. Velocidade: " . $this -> velocidade . " Km/h <br>";

        }

        public function marca(){
            $this -> marca = 
        }

    }

    $meuCarro = new Carro();
    $meuCarro->acelerar();
    $meuCarro->acelerar();
    $meuCarro->frear();

    $meuCarro -> marca = 
    $meuCarro -> modelo = 'Com escada';
    $meuCarro -> ano = '1988';
    $meuCarro -> cor = 'verde';
    
    echo "Seu carro é um: " . $marca 

    
    ?>
</body>
</html>