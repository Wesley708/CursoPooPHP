<?php

    class Veiculo{
        protected $modelo;
        public $cor;
        public $ano;

        public function setModelo($m){
            $this->modelo =$m;
        }
        
        public function getModelo(){
            return $this->modelo; 
        }

        public function Andar(){
            echo 'Andou';
        }
        public function Parar(){
            echo 'Parou';
        }
    }

    class Carro extends Veiculo{
        public function Limpador(){
            echo 'Ligando o limpador';
        }
    }

    class Moto extends Veiculo{
        public function Corredor(){
            echo 'Pegando o corredor';
        }
    }

    $carro = new Carro();
    $carro->cor = " Preto ";
    $carro->setModelo("Fuscão ");
    $carro->ano = 2023;
    $carro->Andar();
    $carro->Limpador();


    $moto = new Moto();
    $moto->cor = "Preta";
    $moto->setModelo("Twister");
    $moto->ano = "2008";
    echo '</br>';
    $moto->Parar();
    $moto->Corredor();

    $veiculo = new Veiculo();
    $veiculo->setModelo('Fazer');
    echo $veiculo->getModelo();
?>