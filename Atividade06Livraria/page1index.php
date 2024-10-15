<!--Status do Código: em análise, mas comentado-->

<!--
    Objetivo: Criar um código de controle de estoque de uma Livraria. 
    O código deve listar as informações da tabela 'produtos', presente no banco de dados.
    Deve ser possível inserir, editar e excluir os livros.
-->

<!--Abre código HTML + Cabeçalho-->
<!DOCTYPE html>
<html lang="pt-br"> <!--Idioma da página-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos | Livraria</title> <!--Titúlo da página-->
    <style>
        body
        {
            padding: 20px;
            background: rgb(13, 52, 68);
        }

        .tabela_livros
        {
            /*Cores e Bordas*/
            background: whitesmoke; 
            border-radius: 10px; 
            border: 2px;
            /*Fonte*/
            color: black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            /*Alinhamente*/
            position: absolute;
            padding: 25px;
            
        }
    </style>
</head>
<body>
    <?php //Abre o código PHP.
        //Conecta no Banco de Dados.
        include ("connection.php");

        //Para selecionar e Exibir a Tabela 'produtos'.
        $sql = "SELECT * FROM produtos ORDER BY id ASC"; //Seleciona e Ordena as informações da tabela 'produtos' através de um comando mysql.
        $resultado = $conn -> query($sql); //Exibe as informações conforme o comando mysql anterior.
    ?>

    <!--Exibe a tabela com as informações dos livros-->
    <div class="tabela_livros"><!---Define a classe do bloco-->
        <h1>LIVROS EM ESTOQUE</h1>
        <table class="table"><!---Define a classe da tabela-->
            <thead>
                <tr>
                    <!--Cria o cabeçalho da tabela-->
                    <th scope="coluna1">ID</th>
                    <th scope="coluna2">Nome</th>
                    <th scope="coluna3">Autor</th>
                    <th scope="coluna4">Sinopse</th>
                    <th scope="coluna4">Gênero</th>
                    <th scope="coluna4">Editora</th>
                    <th scope="coluna4">Lançamento</th>
                    <th scope="coluna4">Classificação</th>
                    <th scope="coluna4">Quant. em Estoque</th>
                    <th scope="coluna4">Valor</th>
                    <th scope="coluna4">...</th> <!--Para função de editar e excluir os livros-->
                </tr>
            </thead>
            <tbody>
                <!--Conteúdo da tabela-->
                <!--Laço de repetição usando PHP para mostrar as informações puxadas do Banco de Dados.-->
                <?php
                    while($dados_livros = mysqli_fetch_assoc($resultado)) //Retorna uma matriz associativa.
                    {
                        echo "<tr>";
                            echo "<td>".$dados_livros['id']."</td>";
                            echo "<td>".$dados_livros['nome']."</td>";
                            echo "<td>".$dados_livros['autor']."</td>";
                            echo "<td>".$dados_livros['sinopse']."</td>";
                            echo "<td>".$dados_livros['genero']."</td>";
                            echo "<td>".$dados_livros['editora']."</td>";
                            echo "<td>".$dados_livros['lancamento']."</td>";
                            echo "<td>".$dados_livros['classificacao']."</td>";
                            echo "<td>".$dados_livros['quantidade_estoque']."</td>";
                            echo "<td>".$dados_livros['valor']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div> <!--Fecha o bloco que armazena a tabela-->
</body>
</html>