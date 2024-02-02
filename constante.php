<?php
    class Pessoa{
        const nome = "Wesley";
        public function exibirNome(){
            echo self::nome;
        }
    }

    class Wesley extends Pessoa{
        const nome = "Alves";
        public function exibirNome(){
            echo parent::nome;
        }
    }

    $wesley = new Wesley;
    $wesley->exibirNome();
?>