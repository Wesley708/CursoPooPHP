<?php
    class Login{
        private $email;
        private $senha;
        private $nome;

        public function __construct($email, $senha, $nome){
            $this->nome = $nome;
            $this->setEmail($email);
            $this->setSenha($senha);
        }

        public function getNome(){
            return $this->nome;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($e){
            $email = filter_var($e, FILTER_SANITIZE_EMAIL);
            $this->email = $email;
        }

        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($s){
            $this->senha = $s;
        }

        public function Logar(){
            if ($this->email == 'teste@teste.com' && $this->senha == 12345678):
                echo 'Logado com sucesso';
            else:
                echo 'Dados inválidos';
            endif;
        }
    }
    $teste = new Login("teste@teste.com", 12345678, "Teste Nome");
    $teste->Logar();
    echo '</br>';
    echo $teste->getEmail();
    echo '</br>';
    echo $teste->getSenha();
    echo '</br>';
    echo $teste->getNome();
?>