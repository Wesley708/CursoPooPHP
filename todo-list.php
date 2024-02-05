<?php

$conexao = new mysqli("127.0.0.1", "root", "", "banco");
if(isset($_POST['depositar']) || isset($_POST['sacar'])){
    if(isset($_POST['depositar'])){
    $depositar = $_POST["depositar"];
    }
    if(isset($_POST['sacar'])){
    $sacar = $_POST["sacar"];
    }
}
$result = $conexao->query('select * from conta');

while($row = $result->fetch_assoc()){
    echo $row['saldo'];
}

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>
<body>
    

<form action="todo-list.php" method="POST">
    <input id="depositar" name="depositar" type="nember" placeholder="Depositar" required>
    <input id="sacar" name="sacar" type="number" placeholder="Sacar" required>
    <input type="submit" value="Enviar">
</form>

    <?php
        $banco = new Banco();
        if($banco->saldo){
            echo $banco->getSaldo();
        }
        if(isset($depositar)){
            $banco->depositar($depositar);
            echo $banco->getSaldo();
        }
        if(isset($sacar)){
            $banco->sacar($sacar);
            echo $banco->getSaldo();
        }
    ?>

</body>
</html>