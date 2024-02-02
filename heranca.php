<?php

    class Veiculo{
        public $modelo;
        public $cor;
        public $ano;

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
    $carro->modelo = "Fuscão ";
    $carro->ano = 2023;
    $carro->Andar();
    $carro->Limpador();


    $moto = new Moto();
    $moto->cor = "Preta";
    $moto->modelo = "Twister";
    $moto->ano = "2008";
    echo '</br>';
    $moto->Parar();
    $moto->Corredor();
?>