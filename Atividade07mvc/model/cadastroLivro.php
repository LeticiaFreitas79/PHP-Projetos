<?php
    require_once("banco.php");

    class Cadastro extends Banco
    {
        private $nome;
        private $autor;
        private $quantidade;
        private $preco;
        private $flag;
        private $data;


        //Métodos SET
        public function setNome($string)
        {
            $this->nome = $string;
        }

        public function setAutor($string)
        {
            $this->autor = $string;
        }

        public function setQuantidade($string)
        {
            $this->quantidade = $string;
        }

        public function setPreco($string)
        {
            $this->preco = $string;
        }

        public function setFlag($string)
        {
            $this->flag = $string;
        }

        public function setData($string)
        {
            $this->data = $string;
        }


        //Método GET
        public function getNome()
        {

        }

        public function getAutor()
        {

        }

        public function getQuantidade()
        {

        }

        public function getPreco()
        {

        }

        public function getFlag()
        {

        }

        public function getData()
        {

        }

        public function incluir()
        {
            return $this->setLivro($this->getNome(),$this->getAutor(),$this->getQuantidade(),$this->getPreco(),$this->getData());
        }
    }
?>