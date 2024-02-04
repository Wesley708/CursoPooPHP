<?php

$depositar = $_POST["depositar"];
$sacar = $_POST["sacar"];

class Banco{
    public $saldo;

    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($s){
       $this->saldo = $s;
    }

    public function depositar($d){
        $this->saldo += $d; 
    }
    public function sacar($s){
        $this->saldo -= $s;
    }
}

?>

<form action="form-banco.php" method="POST">
    <input name="depositar" type="nember" placeholder="Depositar">
    <input name="sacar" type="number" placeholder="Sacar">
    <input type="submit" value="Enviar">
</form>

<?php
    $banco = new Banco();
    if($banco->saldo){
        echo $banco->getSaldo();
    }
    if($depositar){
        $banco->depositar($depositar);
        echo $banco->getSaldo();
    }
    if($sacar){
        $banco->sacar($sacar);
        echo $banco->getSaldo();
    }
?>