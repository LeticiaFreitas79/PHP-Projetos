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
                //
                echo "<tr>";
                echo "<th>".$dado['nome']."</th>";
                echo "<td>".$dado['autor']."</td>";
                echo "<td>".$dado['quantidade']."</td>";
                echo "<td> R$ ".number_format($dado['preco'],2,",",".")."</td>";
                echo "<td>".$dado['data']."</td>";
                echo "<td>".$dado['flag'] = ($dado['flag'] == "0") ? "Desativado":"Atividade"."</td>";
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