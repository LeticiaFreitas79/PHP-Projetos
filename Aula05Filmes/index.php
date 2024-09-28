<!DOCTYPE html>
<html lang="pt-br"> <!--Idioma da página-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title> <!---Título da Página-->
</head>
<body>
    <?php //Abre código PHP.
        include ("conection.php"); //Conecta com o Banco de Dados.
        //Com esse comando é possível inserir o código de outro arquivo no arquivo atual.

        //Seleciona as informações da tabela de 'produtos' no Banco de Dados através de um comando MySQL.
        $sql = "SELECT * FROM produtos ORDER BY id DESC"; //Seleciona todos os itens da tabela, a partir do ID ordena do maior para o menor.
        //'SELECT count(*) FROM produtos ORDER BY id DESC;' Conta a quantidade de registros na tabela indicada.
        $resultado = $conn -> query($sql) //A váriavel '$resultado' irá receber e armazenar o resultado do comando acima. Este comando tmabém serve para executar o comando MySQL.

    ?> <!--Fecha o código PHP-->

     <!--Abre um bloco para armazenar a tabela (visualmente agradável)-->
    <div class="m-5"> <!--Define a margem, -->
        <table class="table text-white table-bg-black"> <!---Cria a tabela-->
            <thead>
                <tr>
                    <!--Cria o cabeçalho da tabela-->
                    <th scope="coluna1">ID</th>
                    <th scope="coluna2">Nome</th>
                    <th scope="coluna3">Gênero</th>
                    <th scope="coluna4">Classificação</th>
                    <th scope="coluna4">Lançamento</th>
                    <th scope="coluna4">Duração</th>
                    <th scope="coluna4">Diretor</th>
                    <th scope="coluna4">Produtora</th>
                    <th scope="coluna4">Valor</th>
                    <th scope="coluna4">...</th> <!--Para função de deletar e editar registros-->
                </tr>
            </thead>
            <tbody>
                <!--Conteúdo da tabela-->
                <!--Laço de repetição usando PHP para mostrar as informações puxadas do Banco de Dados.-->
                <?php
                    while($dados_filmes = mysqli_fetch_assoc($result)) //
                    {
                        echo "<tr>";
                            echo "<td>".$user_data['id']."</td>";
                            echo "<td>".$user_data['filme']."</td>";
                            echo "<td>".$user_data['genero']."</td>";
                            echo "<td>".$user_data['indicacao']."</td>";
                            echo "<td>".$user_data['lancamento']."</td>";
                            echo "<td>".$user_data['duracao']."</td>";
                            echo "<td>".$user_data['diretor']."</td>";
                            echo "<td>".$user_data['produtora']."</td>";
                            echo "<td>".$user_data['valor']."</td>";
                            echo "<td>".$user_data['id']."</td>";
                        echo "</tr>"
                    }
                ?>
            </tbody>
        </table>
    </div> <!--Fecha o bloco que armazena a tabela-->
</body>
</html>