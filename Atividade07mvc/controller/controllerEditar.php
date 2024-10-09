<?php
    require_once("../model/banco.php"); //Inclui o script 'banco.php' no arquivo atual.

    class editarController //Define a classe 'editarController'
    {
        //Declarando propriedades privadas usadas para armazenar dados de um livro.
        private $editar; 
        private $nome;
        private $autor;
        private $quantidade;
        private $preco;
        private $data;
        private $flag;
    }

    public function __construct($id) //Define o método construtor público, que recebe o '$id' como parâmetro e inicia a isntância da classe Banco.
    {
        $this -> editar = new Banco(); //
        $this -> criarFormulario($id);
    }

    private function criarFormulario($id)
    {
        $row = $this -> editar -> pesquisarLivro($id);
        $this -> nome = $row ['nome'];
        $this -> autor = $row ['autor'];
        $this -> quantidade = $row ['quantidade'];
        $this -> preco = $row ['preco'];
        $this -> data = $row ['data'];
        $this -> flag = $row ['flag'];
    }

    public function editarFormulario($nome,$autor,$quantidade,$preco,$data,$flag,$id)
    {
        if($this -> editar -> updateLivro($nome,$autor,$quantidade,$preco,$data,$flag,$id) == TRUE)
        {
            echo "<script> alert ('Registro incluido com sucesso!'); document.location = '../view/index.php' </script>";
        }
        else
        {
            echo "<script> alert ('Erro ao gravar registro!');history.back()</script>";
        }
    }

    public function getNome()
    {
        return $this -> nome;
    }

    public function getAutor()
    {
        return $this -> autor;
    }

    public function getQuantidade()
    {
        return $this -> quantidade;
    }

    public function getPreco()
    {
        return $this -> preco;
    }

    public function getData()
    {
        return $this -> data;
    }

    public function getFlag()
    {
        return $this -> flag;
    }

    $id = filter_input(INPUT_GET, 'id');
    $editar = new editarController($id);
    if(isset($_POST['submit']))
    {
        $editar -> editarFormulario($_POST['nome'], $_POST['autor'], $_POST['quantidade'], $_POST['preco'], $_POST['data'], $_POST['flag'], $_POST['id']);
    }
?>