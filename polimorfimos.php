<?php
    class Animal{
        public function Andar(){
            echo "O animal andou!";
        }
        public function Correr(){
            echo "O animal correu!";
        }
    }

    class Cavalo extends Animal{
        public function Andar(){
            echo "O cavalo andou!";
        }
        public function Correr()
        {
            echo $this->Andar();
        }
    }

    $animal = new Cavalo;
    $animal->Andar();
    $animal->Correr();
?>