<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo 01 - avaliação 01</title>
</head>
<body>
    <?php 
    //<em> e </em> para italico
    echo "<strong>AVALIAÇÃO 01</strong>: Programação Orientada a Objetos <br>Criação da Classe <strong><em>Carro</em></strong>: <br><br>";
    
    //criação da classe
    class Carro{
        public $marca;  //criando atributos 
        public $modelo;
        public $ano;
        public $cor;
        public $velocidade = 0;

        //criando funcoes acelerar e frear
        public function acelerar(){
            $this -> velocidade += 10;
            echo "O Carro Acelerou. Velocidade: <strong> " . $this -> velocidade . "Km/h</strong> <br>";
        }
        //frear tem um condição de se a velocidade for igual ou maior que 10, irá decrementar, para que o valor nao se torne negativo 
        public function frear(){
            if($this -> velocidade >= 10){
                $this -> velocidade -= 10;
            }// <strong> e </strong> para negrito
            echo "O carro freou. Velocidade: <strong>" . $this -> velocidade . " Km/h</strong> <br><br>";
        }
        //criando funcoes e dando valores pré-definidos para restantes atributos 
        public function marca(){
            $this -> marca = "Uno";
            echo "A marca do carro é: " . $this -> marca . "<br>";
        }

        public function modelo(){
            $this -> modelo = 'Com escada';
            echo "O modelo do seu carro é: ". $this -> modelo . "<br>";
        }

        public function ano(){
            $this -> ano = '1988';
            echo "O ano do seu carro é: ". $this -> ano . "<br>";
        }

        public function cor(){
            $this -> cor = 'verde';
            echo "A cor do seu carro é: ". $this -> cor . "<br>";
        }
    }
    //criação do objeto na classe CARRO
    $meuCarro = new Carro();

    //$meuCarro->marca = "honda"  <-- como inserir novos valores à atributos;

    //instanciando as funcoes de acelerar e frear
    $meuCarro -> acelerar();
    $meuCarro -> acelerar();
    $meuCarro -> acelerar();
    $meuCarro -> acelerar();
    $meuCarro -> frear();

    //instanciando os atributos marca, modelo, ano e cor com valores pré-definidos
    $meuCarro -> marca();
    $meuCarro -> modelo();
    $meuCarro -> ano();
    $meuCarro -> cor();

    
    ?>
</body>
</html>