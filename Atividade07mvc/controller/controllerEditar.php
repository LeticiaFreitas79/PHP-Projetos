<!--Status do Código: Finalizado e Comentado-->

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
        $this -> editar = new Banco(); //Cria uma nova instância da classe e a armazena na propriedade '$editar'. Permite que a classe interaja com o Banco.
        $this -> criarFormulario($id); //Chama o método que busca os dados do livro correspondente ao ID.
    }

    private function criarFormulario($id) //Método privado que recebe o ID como parâmetro para buscar os dados do livro.
    {
        $row = $this -> editar -> pesquisarLivro($id); //Chama o método que passa o ID para buscar os dados do livro. Os dados são armazenados na váriavel '$row'.
        //Propriedades da classe preenchidas com os valores retornados na váriavel '$row' com os dados do livro.
        $this -> nome = $row ['nome'];
        $this -> autor = $row ['autor'];
        $this -> quantidade = $row ['quantidade'];
        $this -> preco = $row ['preco'];
        $this -> data = $row ['data'];
        $this -> flag = $row ['flag'];
    }

    //Define o método pùblico 'editarFormulario' que recebe os novos dados do livro e o ID para atualizar o registro.
    public function editarFormulario($nome,$autor,$quantidade,$preco,$data,$flag,$id)
    {
        //Verifica se a atualização do livro no Banco de Dados foi bem-sucedida. O método 'updateLivro' da classe é chamado com os dados fornecidos.
        if($this -> editar -> updateLivro($nome,$autor,$quantidade,$preco,$data,$flag,$id) == TRUE)
        {
            //Mensagem caso a operação seja bem-sucedida.
            echo "<script> alert ('Registro incluido com sucesso!'); document.location = '../view/index.php' </script>";
        }
        else //caso a atualização falhar.
        {
            //Mensagem caso a operação não seja bem-sucedida.
            echo "<script> alert ('Erro ao gravar registro!');history.back()</script>";
        }
    }

    public function getNome() //Definição do método público.
    {
        return $this -> nome; //Retorna o valor da propriedade.
    }

    public function getAutor() //Definição do método público.
    {
        return $this -> autor; //Retorna o valor da propriedade.
    }

    public function getQuantidade() //Definição do método público.
    {
        return $this -> quantidade; //Retorna o valor da propriedade.
    }

    public function getPreco() //Definição do método público.
    {
        return $this -> preco; //Retorna o valor da propriedade.
    }

    public function getData() //Definição do método público.
    {
        return $this -> data; //Retorna o valor da propriedade.
    }

    public function getFlag() //Definição do método público.
    {
        return $this -> flag; //Retorna o valor da propriedade.
    }

    $id = filter_input(INPUT_GET, 'id'); //Recupera o valor do parâmetro 'id' da URL e aplica 'filter_input' para sanitização, garantindo que o valor seja seguro para uso. 
    $editar = new editarController($id); //Inicia o processo de edição do livro.
    if(isset($_POST['submit'])) //Verifica se o formulário foi submetido.
    {
        //Se o formulário foi submetido, chama o método editarFormulario da instância editarController, passando os dados do formulário.
        $editar -> editarFormulario($_POST['nome'], $_POST['autor'], $_POST['quantidade'], $_POST['preco'], $_POST['data'], $_POST['flag'], $_POST['id']);
    }
?>