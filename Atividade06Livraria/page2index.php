<!--Status do Código: em desenvolvimento-->

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
</head>
<body>
    <?php //Abre o código PHP.
        //Conecta no Banco de Dados.
        include ("connection.php");

        //Para selecionar e Exibir a Tabela 'produtos'.
        $sql = "SELECT * FROM produtos ORDER BY id DESC"; //Seleciona e Ordena as informações da tabela 'produtos' através de um comando mysql.
        $resultado = $conn -> query($sql); //Exibe as informações conforme o comando mysql anterior.
    ?>

    <!--Exibe a tabela com as informações dos livros-->
    <div class="m-5"> <!--Define a margem-->
        <table class="table text-white table-bg-black"> <!---Cria a tabela-->
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
                    while($dados_livros = mysqli_fetch_assoc($result)) //
                    {
                        echo "<tr>";
                            echo "<td>".$user_data['id']."</td>";
                            echo "<td>".$user_data['nome']."</td>";
                            echo "<td>".$user_data['autor']."</td>";
                            echo "<td>".$user_data['sinopse']."</td>";
                            echo "<td>".$user_data['genero']."</td>";
                            echo "<td>".$user_data['editora']."</td>";
                            echo "<td>".$user_data['lancamento']."</td>";
                            echo "<td>".$user_data['classificacao']."</td>";
                            echo "<td>".$user_data['quantidade_estoque']."</td>";
                            echo "<td>".$user_data['valor']."</td>";
                            echo "<td>".$user_data['id']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div> <!--Fecha o bloco que armazena a tabela-->
</body>
</html>