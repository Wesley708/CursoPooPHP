<?php
    abstract Class Banco{
        protected $saldo;
        protected $limiteSaldo;
        protected $juros;

        public function setSaldo($s){
            $this->saldo = $s;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        abstract protected function Sacar($s);

        abstract protected function Depositar($d);
    }

    class Itau extends Banco{
        public function Sacar($s){
            $this->saldo -= $s; 
        }
        public function Depositar($d){
            $this->saldo += $d;
        }
    }

    class Bradesco extends Banco{
        public function Sacar($s){
            echo 'Sacou';
        }
        public function Depositar($d){
            echo 'Depositou';
        }
    }

    $itau = new Itau;
    $itau->setSaldo(1000);
    echo '</br>Saldo: '.$itau->getSaldo();
    $itau->Sacar(100);
    echo '</br>Saldo: '.$itau->getSaldo();
    $itau->Depositar(200);
    echo '</br>Saldo: '.$itau->getSaldo();

?>