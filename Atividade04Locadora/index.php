<!DOCTYPE html>
<html lang="pt-br"> <!--Idioma da página-->
<head>
    <meta charset="UTF-8"> <!--Permite que o navegador interperte corretamente os caracteres da página-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--Permite a melhor renderização da página--> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Permite que a página seja responsiva-->
    <title>Filmes Disponíveis | Locadora</title> <!---Título da Página-->

    <style>
        body
        {
            padding: 20px;
            background: rgb(13, 52, 68);
        }

        .tabela_filmes
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

    <?php //Abre código PHP.
        include ("conexao.php"); //Conecta com o Banco de Dados.

        //Seleciona as informações da tabela de 'produtos' no Banco de Dados através de um comando MySQL.
        $sql = "SELECT * FROM produtos ORDER BY id ASC"; //Seleciona todos os itens da tabela, a partir do ID ordena do maior para o menor.
        $listaFilmes = $conn -> query($sql); //A váriavel '$listaFilmes' irá receber e armazenar o resultado do comando acima. Este comando tmabém serve para executar o comando MySQL.

    ?> <!--Fecha o código PHP-->

     <!--Abre um bloco para armazenar a tabela (visualmente agradável)-->
    <div class="tabela_filmes"> <!--Define a classe do bloco, facilitando a personalização-->
        <table class="conteudo_filmes"> <!---Abre a tabela-->
            <thead> <!--Abre o cabeçalho da tabela-->
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
            </thead> <!--Fecha o cabeçalho da tabela-->
            <tbody> <!--Abre o 'corpo' da tabela-->
                <!--Conteúdo da tabela-->
                <!--Laço de repetição usando PHP para mostrar as informações puxadas do Banco de Dados.-->
                <?php
                    while($dadosFilmes = mysqli_fetch_assoc($listaFilmes)) //Enquanto, O bloco de código deverá ser executado.
                    {
                        echo "<tr>";
                            echo "<td>".$dadosFilmes['id']."</td>";
                            echo "<td>".$dadosFilmes['filme']."</td>";
                            echo "<td>".$dadosFilmes['genero']."</td>";
                            echo "<td>".$dadosFilmes['indicacao']."</td>";
                            echo "<td>".$dadosFilmes['lancamento']."</td>";
                            echo "<td>".$dadosFilmes['duracao']."</td>";
                            echo "<td>".$dadosFilmes['diretor']."</td>";
                            echo "<td>".$dadosFilmes['produtora']."</td>";
                            echo "<td>".$dadosFilmes['valor']."</td>";
                            echo "<td>".$dadosFilmes['id']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody> <!--Fecha o 'corpo' da tabela-->
        </table> <!--Fecha a tabela-->
    </div> <!--Fecha o bloco que armazena a tabela-->
</body> <!--Fecha o corpo da página-->
</html> <!--Encerra o HTML-->