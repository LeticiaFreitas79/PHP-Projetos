<?php
    require_once("../model/cadastroLivro.php"); //Inclui o arquivo 'cadastroLivro' no script atual.
    
    class cadastroController //Abre a classe 'cadastroController'.
    {
        private $cadastro; //Declara uma propriedade privada que não pode ser acessada diretamente de fora da classe.
        public function __construct() //Define um construtor público para a classe 'cadastroController'.
            //Um método construtor se refere ao primeiro método a ser executado quando a classe é iniciada.
        {
            $this -> cadastro = new Cadastro(); //Inicia a propriedade 'cadastro' do objeto atual com uma nova instância da classe 'Cadastro'.
            $this -> incluir(); //Chama o método 'incluir' da instância atual.
        }

        private function incluir() //Define o método privado 'incluir'.
        {
            //Armazenando as informações dos livros.
                //$this: refere-se á  instância atual da classe em que o código está sendo executado. É usado para acessar propriedades e métodos dessa instância.
                //->: operador utilizado para acessar métodos e propriedades de um objeto. Aqui, está sendo usado para acessar a propriedade cadastro da instância atual.
                //cadastro: propriedade da classe que contem um objeto (verficar linha10).
                //setName: método que está sendo chamado no objeto 'cadastro'. 
                //$_POST['name']: Valor que está sendo passado como agumento para o método set().
                //$_POST é uma superglobal do PHP que contém os dados enviados através de um formulário HTTP usando o método POST.
            $this -> cadastro -> setNome ($_POST['nome']); 
            $this -> cadastro -> seAutor ($_POST['autor']);
            $this -> cadastro -> setQuantidade ($_POST['quantidade']);
            $this -> cadastro -> setPreco ($_POST['preco']);
            $this -> cadastro -> setData (date('Y-m-d',strtotime($_POST['data'])));

            $result = $this->cadastro->incluir(); //Armazena a inclusão dos registros na váriavel '$result'.
            if($result >= 1) //Verifica se o resultado da operação de inclusão é verdadeior ou falso.
            {
                //Caso a operação tenha sido bem sucedida.
                // '../view/cadastro.php' redireciona a página atual para a página indicada.
                echo "<script>alert('Registro incluido com sucesso!');document.location='../view/cadastro.php'</script>";
            }
            else
            {
                //Caso a operação tenha sido mal-sucedida.
                // 'history.back()' faz com que o navegador volte para a página anterior.
                echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
            }
        }
    }
?>