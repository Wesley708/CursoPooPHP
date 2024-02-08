<?php

class Produtos{
    public $name;
    public $valor;

    function __construct($nome, $valor){
        $this->name = $nome;
        $this->valor = $valor;
    }
    
}

class Carrinho {
    public $produtos;

    public function adiciona(Produtos $produto){
        $this->produtos[] = $produto;
    }

    public function exibe(){
        foreach($this->produtos as $produto){
            echo $produto->name . '</br>';
            echo $produto->valor . '</br>';

        }
    }

}

$produto1 = new Produtos("Mouse", 160);
$produto2 = new Produtos("Cadeira", 300);

$carrinho = new Carrinho;
$carrinho->adiciona($produto2);
$carrinho->adiciona($produto1);
$carrinho->exibe();


?>