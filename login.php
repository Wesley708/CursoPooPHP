<?php
    class Login{
        private $email;
        private $senha;

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
    $teste = new Login;
    $teste->setEmail('teste@teste.com');
    $teste->setSenha(12345678);
    $teste->Logar();
    echo '</br>';
    echo $teste->getEmail();
    echo '</br>';
    echo $teste->getSenha();
?>