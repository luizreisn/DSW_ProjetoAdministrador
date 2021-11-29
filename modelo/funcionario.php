<?php
    class Funcionario{
        private $id;
        private $nome;
        private $nascimento;
        private $celular;
        private $email;
        private $senha;

        function __construct($id, $nome, $nascimento, $celular, $email, $senha){
            $this -> id = $id;
            $this -> nome = $nome;
            $this -> nascimento = $nascimento;
            $this -> celular = $celular;
            $this -> email = $email;
            $this -> senha = $senha;
        }

        public function getId(){
            return $this -> id;
        }

        public function getNome(){
            return $this -> nome;
        }
        public function setNome($nome){
            $this -> nome = $nome;
        }

        public function getNascimento(){
            return $this -> nascimento;
        }
        public function setNascimento($nascimento){
            $this -> nascimento = $nascimento;
        }

        public function getCelular(){
            return $this -> celular;
        }
        public function setCelular($celular){
            $this -> celular = $celular;
        }

        public function getEmail(){
            return $this -> email;
        }
        public function setEmail($email){
            $this -> email = $email;
        }

        public function getSenha(){
            return $this -> senha;
        }
        public function setSenha($senha){
            $this -> senha = $senha;
        }

    }
?>