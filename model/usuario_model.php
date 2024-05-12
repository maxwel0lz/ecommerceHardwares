<?php
    class Usuario {
        public $nome;
        public $sobrenome;
        public $cpf;
        public $email;
        public $senha;

        public function __construct($nome, $sobrenome, $cpf, $email, $senha) {
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->cpf = $cpf;
            $this->email = $email;
            $this->senha = $senha;
        }

        public function exibirDados() {
            echo "Nome: " . $this->nome . " " . $this->sobrenome . "<br>";
            echo "CPF: " . $this->cpf . "<br>";
            echo "Email: " . $this->email . "<br>";
        }

        public function verificarSenha($senha) {
            return $this->senha === $senha;
        }
    }

?>