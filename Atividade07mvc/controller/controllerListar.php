<!--Status do Código: Em revisão, mas comentado-->

<?php
    require_once("../model/banco.php"); //Inclui o arquivo de conexão com o Banco de Dados apenas uma vez.
  
    class listarController //Define a classe.
    {
        private $lista; //Propriedade privada.
        public function __construct() //Método construtor da classe. Método chamado automaticamente quando uma nova instância é criada.
        {
            $this->lista = new Banco(); //Instância da classe 'Banco' e armazena a propriedade '$lista'.
            $this->criarTabela(); //Chama o método após a inicialização da classe, assim criando a tabela com os dados.
        }

        private function criarTabela () //Método privado responsável por criar e exibir a tabela com os dados dos livros.
        {
            $dados = $this->lista->getLivro(); //Chama o método 'getLivro' da classe 'Banco' e armazena o resultado na váriavel '$dados'.
            foreach ($dados as $dado) //Loop que itera sobre cada elemento do array '$dados'.
            {
                echo "<tr>"; //Cria uma nova linha na tabela.
                echo "<th>".$dado['nome']."</th>"; //Célula de cabeçalho (<th>) com o nome do livro, que é acessado na chave 'nome' do array $dado.
                echo "<td>".$dado['autor']."</td>"; //Célula de dados (<td>) para exibir o autor do livro, acessando o valor na chave 'autor'.
                echo "<td>".$dado['quantidade']."</td>"; //Célula para exibir a quantidade de livros disponíveis, utilizando a chave 'quantidade'.
                echo "<td> R$ ".number_format($dado['preco'],2,",",".")."</td>"; //Célula que exibe o preço do livro.
                    //A função number_format formata o preço com duas casas decimais, utilizando a vírgula como separador decimal e o ponto como separador de milhar.
                echo "<td>".$dado['data']."</td>"; //Célula que exibe a data relacionada ao livro, acessando a chave 'data'.
                echo "<td>".$dado['flag'] = ($dado['flag'] == "0") ? "Desativado":"Atividade"."</td>"; //Cria uma célula que verifica o valor da chave 'flag'.
                    //Se for igual a "0", exibe "Desativado"; caso contrário, exibe "Atividade". Note que há um erro aqui: a atribuição está sendo feita dentro do echo, o que pode causar confusão.
                
                echo "<td>
                    <a class='btn btn-warning' href='editar.php?id=".$dado['nome']."'> 
                        Editar
                    </a>
                    &nbsp&nbsp
                    <a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$dado['nome']."'>
                        Excluir
                    </a></td>";
                echo "</tr>";
            }
        }
    }
?>