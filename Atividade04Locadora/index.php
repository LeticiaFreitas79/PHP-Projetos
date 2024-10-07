<!--Status do Código: em correção-->

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
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgba(74, 78, 105);
            padding: 20px;
        }

        div 
        {
            background-color: rgba(242, 233, 228);
            position: absolute;
            padding: 40px; /* Distância entre os elementos e a borda da div. */
            border-radius: 25px;
            color: rgba(34, 34, 59); /* Cor do título*/
        }

        th
        {
            padding: 10px;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            width: 300px;
            background-color: rgba(201, 173, 167);
            color: rgba(34, 34, 59);
        }

        table
        {
            text-align: center;
        }

        h1
        {
            text-align: center;
        }

        .btnAdd
        {
            background-color: rgba(154, 140, 152);
            border: none;
            border-radius: 10px;
            padding: 15px;
            font-size: 15px;
            font-weight: bold;
            color: rgba(251, 248, 246);
        }

        .btnAdd:hover
        {
            background-color: rgba(74, 78, 105);
            cursor: pointer;
        }

        .btnDelete
        {
            background-color: rgba(154, 140, 152);
            border: none;
            border-radius: 10px;
            padding: 10px;
            font-size: 15px;
            font-weight: bold;
            color: rgba(251, 248, 246);
        }

        .btnDelete:hover
        {
            background-color: rgba(74, 78, 105);
            cursor: pointer;
        }

        .btnUpdate
        {
            background-color: rgba(154, 140, 152);
            border: none;
            border-radius: 10px;
            padding: 10px;
            font-size: 15px;
            font-weight: bold;
            color: rgba(251, 248, 246);
        }

        .btnUpdate:hover
        {
            background-color: rgba(74, 78, 105);
            cursor: pointer;
        }
    </style>

</head>
<body>

    <?php //Abre código PHP.
        include ("conexao.php"); //Conecta com o Banco de Dados.
    ?> <!--Fecha o código PHP-->

     <!--Abre um bloco para armazenar a tabela (visualmente agradável)-->
    <div>
        <h1>FILMES DISPONÍVEIS</h1>
        <form action="inserir.php">
            <input type="submit" class="btnAdd" name='action' value='Adicionar'>
        </form>
        <br>

        <table> <!---Abre a tabela-->
            
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
                     //Seleciona as informações da tabela de 'produtos' no Banco de Dados através de um comando MySQL.
                    $select = "SELECT * FROM produtos ORDER BY id ASC"; //Seleciona todos os itens da tabela, a partir do ID ordena do maior para o menor.
                     $listaFilmes = $conn -> query($select); //A váriavel '$listaFilmes' irá receber e armazenar o resultado do comando acima. Este comando tmabém serve para executar o comando MySQL.
                    while($dadosFilmes = mysqli_fetch_assoc($listaFilmes)) //Enquanto, O bloco de código deverá ser executado.
                    {
                        echo
                        "<tr><td>".$dadosFilmes['id']."</td>
                            <td>".$dadosFilmes['filme']."</td>
                            <td>".$dadosFilmes['genero']."</td>
                            <td>".$dadosFilmes['indicacao']."</td>
                            <td>".$dadosFilmes['lancamento']."</td>
                            <td>".$dadosFilmes['duracao']."</td>
                            <td>".$dadosFilmes['diretor']."</td>
                            <td>".$dadosFilmes['produtora']."</td>
                            <td>".$dadosFilmes['valor']."</td>
                            <td>".$dadosFilmes['id']."</td>

                            <td>
                            <form action='deletar.php' method='POST'>
                            <input type='hidden' name='id' value='".$dadosFilmes["id"]."'>
                            <input type='hidden' name='filme' value='".$dadosFilmes["filme"]."'>
                            <input type='hidden' name='genero' value='".$dadosFilmes["genero"]."'>
                            <input type='hidden' name='indicacao' value='".$dadosFilmes["indicacao"]."'>
                            <input type='hidden' name='lancamento' value='".$dadosFilmes["lancamento"]."'>
                            <input type='hidden' name='duracao' value='".$dadosFilmes["duracao"]."'>
                            <input type='hidden' name='diretor' value='".$dadosFilmes["diretor"]."'>
                            <input type='hidden' name='produtora' value='R$'.'".$dadosFilmes["produtora"]."'>
                            <input type='hidden' name='valor' value='R$".$dadosFilmes["valor"]."'>
                            <input type='submit' class='btnDelete'name='action' value='Deletar'>
                            <td>
                            </form>

                            <td>
                            <form action='atualizar.php' method='POST'>
                            <input type='hidden' name='id' value='".$dadosFilmes["id"]."'>
                            <input type='hidden' name='filme' value='".$dadosFilmes["filme"]."'>
                            <input type='hidden' name='genero' value='".$dadosFilmes["genero"]."'>
                            <input type='hidden' name='indicacao' value='".$dadosFilmes["indicacao"]."'>
                            <input type='hidden' name='lancamento' value='".$dadosFilmes["lancamento"]."'>
                            <input type='hidden' name='duracao' value='".$dadosFilmes["duracao"]."'>
                            <input type='hidden' name='diretor' value='".$dadosFilmes["diretor"]."'>
                            <input type='hidden' name='produtora' value='R$'.'".$dadosFilmes["produtora"]."'>
                            <input type='hidden' name='valor' value='R$".$dadosFilmes["valor"]."'>
                            <input type='submit' class='btnUpdate'name='action' value='Atualizar'>
                            <td>
                            </form>
                        </tr>";
                    }
                ?>
            </tbody> <!--Fecha o 'corpo' da tabela-->
        </table> <!--Fecha a tabela-->
    </div> <!--Fecha o bloco que armazena a tabela-->
</body> <!--Fecha o corpo da página-->
</html> <!--Encerra o HTML-->