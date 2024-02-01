<?php

class Pessoa {
    public $nome;
    public $idade;

    public function Falar(){
        echo $this->nome . ' de ' . $this->idade . ' anos, Acabou de falar!';
    }
}

$wesley = new Pessoa();
$wesley->nome = "Wesley Alves do Nascimento";
$wesley->idade = 26;
$wesley->Falar();
?>