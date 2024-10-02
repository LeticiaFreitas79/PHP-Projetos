<!DOCTYPE html>
<html lang="pt-br"> <!--Idioma da página-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atv com Banco de Dados</title> <!--Título da janela-->
</head>
<body>  
    <?php //Abre o código PHP.
        include("connection.php"); //Insere no arquivo atual o código presente no arquivo indicado.
        //Neste caso, o códido de 'connection.php' está sendo inserido neste arquivo através do comando include.
        
        //Declaração de Váriaveis.
        //Essas váriaveis são declaradas vazias para que os campos da tabela apareçam também vazios quando a página for carregada.
        $cnome = ""; 
        $cusuario  = ""; 
        $csaldo = ""; 
        $csenha = "";


        //Função que seleciona um cliente da tabela que terá as informações alteradas.
        if(!empty($_POST['selecionarCliente'])=="Atualizar") //Se 'selecionarCliente' for diferente de vazio, os comandos abaixo serão executados.
        // ! inverte o valor retornado pela função 'empty()'.
        //$_POST é uma superglobal de PHP. No caso, o valor da chave 'selecionarCliente' está sendo acessado.
        {
            $sql = "SELECT * FROM contas WHERE id=".$_POST['id']; //Puxa o a função do Banco de Dados através de um comando MySQL.
            $dado = $conn -> query($sql); //A váriavel '$dado' armazena o resultado da consulta feita no banco de dados ($conn -> query($select)).
            // A váriavel '$conn' representa a conexão do arquivo com o banco de dados. Conn de Connection. Verificar Linha 8 em 'connection.php'.
            // -> É o operador 'seta'; T_OBJECT_OPERATOR (de acordo com o manual); Serve para acessar propriedades/métodos de um objeto.
            // O método 'query' é utilizado para executar uma consulta SQL, ou seja, no Banco de Dados.
            
            if (!empty($dado)) //Se a váriavel '$dado' estiver vazia, então os comandos abaixo serão executados.
            {
                while ($cliente = $dado -> fetch_assoc()) //Atribui a linha atual do resultado da consulta a variavél '$cliente'. Se não houver mais linhas para buscar, o loop será encerado pela váriavel retornar falso.
                //fetch_assoc() método usado em objeos de resultado em consultas em Banco de Dados (resposta de uma consulta MySQL).
                    //Esse método busca a próxima linha do conjunto de resultados como um array associativo.
                {
                    //Processando dados do Banco de Dados.
                    $cnome = $cliente["nome"]; //Associa o valor da coluna 'nome' para o cliente em específico.
                    $cusuario  = $cliente["usuario"]; //Associa o valor da coluna 'usuario' para o cliente em específico.
                    $csaldo = $cliente["saldo"]; //Associa o valor da coluna 'saldo' para o cliente em específico.
                    $csenha = $cliente["senha"]; //Associa o valor da coluna 'senha' para o cliente em específico.
                }
            }
        }
        
        //Função 'delete' que exclui dados da tabela com base em seu ID.
        if(!empty($_POST['id'])) //Se o campo 'ID' for diferente de vazio, então os comandos abaixo serão executados. 
        {
            $sql = "DELETE FROM contas WHERE id = ".$_POST['id']; //Puxa o a função do Banco de Dados através de um comando MySQL.
            $conn -> query($sql); //Realiza a consulta no Banco de Dados.
        }

        if (!empty($_POST['nome'])) //Se o campo 'nome' for diferente de vazio, os comandos abaixo serão executados.
        {
            //Para que os dados do formulário sejam processados. Os dados são enviados para o Banco de Dados e são acessados através do '$_POST'.
            $nome = $_POST["nome"]; //
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];
            $saldo = $_POST["saldo"];
    
            $sql = "INSERT INTO contas (nome, usuario, senha, saldo) VALUE ('$nome', '$usuario', '$senha', '$saldo')"; //Puxa a função 'INSERT' do banco de dados, atribuindo os valores da tabela 'contas'.
            $conn -> query($sql); //Realiza a consulta no Banco de Dados.
                //Esse comando é necessário sempre que se puxa uma função do banco de dados, pois, sem esse comando, a função do banco não é executada.
        }
    
        $sql = "SELECT id, nome, usuario, saldo FROM contas"; //Puxa a função 'SELECT FROM' do Banco de Dados.
        $dados = $conn ->query($sql); //A váriavel '$dado' armazena o resultado da consulta feita no banco de dados 
    
        //Exibe os títulos de cada coluna na tabela.
        echo "<table>
            <tr>
                <th> ID </th>
                <th> NOME </th>
                <th> USUÁRIO </th>
                <th> SALDO </th>
            </tr>";

        while ($row = $dados->fetch_assoc()) //Enquanto houver linhas na tabela para serem processadas, os comandos abaixo serão executados.
            // Não se usa ponto e virgula antes das chaves.
        {
            //Serve para adicionar as informações na tabela com os campos específicos.
            echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["nome"]."</td>
                    <td>".$row["usuario"]."</td>
                    <td>".$row["saldo"]."</td>
                    <td>
                        <form action = 'index.php' method = 'POST' >
                            <input type = 'hidden' name = 'id' value = ' ".$row["id"]."' >
                            <input type = 'submit' name= 'selecionarcliente' value = 'Atualizar'>
                            <input type = 'submit' name= 'deletarcliente' value = 'Deletar'>
                        </form>
                </tr>";

                //Linhas 84-87
                    // '<td></td>' tag HTML usada para criar uma délula dentro de uma tabela.
                    // '$row' Armazena a informação vinda do Banco de Dados.
                //Linha 89: Cria um formulário na página indicada. Neste caso, o formulário será criado na página index.
                //Linha 90: Insere o campo 'ID', invisível para o usuário, mas essencial para o funcionamento da função.
                    // <input> cria um campo de entrada no formulário.
                    //'type' define o tipo de entrada que será exibida.
                    //'hidden' indica que o campo não será visivel para o usuário, mas ainda estará no formulário. É usado para armazenar informações que não são relevantes para o usuário, como identificadores.
                    //'name = 'id'' define o nome do campo que será usado como referencia após o envio do formulário.
                    //'value' define o valor que será enviado ao Banco de Dados.
                    //".$row["id"]." indica a utilização do PHP para inserir o valor no campo de forma dinamica a partir do array '$row'
                    //'.' é usado para representar a concatenação em PHP.
                        //A concatenação serve para unir duas strings.
                //Linha 91: Serve para executar a função de atualizar as informações do usuário. Quando o botão 'Atualizar' é clicado, o formulário é enviado e os dados dele são processados de acordo com o script PHP.
                    //'submit' indica que o botão, quando clicado, irá enviar o formulário para o Banco de Dados.
                    //'name' indica o nome do campo para que esse seja usado como referencia ao ser enviado.
                    //'value' define o texto que será exibido no botão.
                //Linha 92: Serve para executar a função de deletar as informações da tabela com com base no 'ID'.
                //Linha 93: Fecha o formulário.
        }
    ?> <!--Fecha o código PHP-->
 
<form action="index.php" method="POST"> <!--Cria um formulário no arquivo 'index.php'-->
    Nome: <input type="text" name="nome" value ="<?php echo $cnome;?>"><br> <!--Permite a inserção e edição de informações no campo pelo usuário-->
    Usuario: <input type="text" name="usuario" value ="<?php echo $cusuario;?>"><br> <!--Permite a inserção e edição de informações no campo pelo usuário-->
    Senha: <input type="text" name="senha" value ="<?php echo $csenha;?>"><br> <!--Permite a inserção e edição de informações no campo pelo usuário-->
    Saldo: <input type="text" name="saldo" value ="<?php echo $csaldo;?>"><br> <!--Permite a inserção e edição de informações no campo pelo usuário-->
    <input type = 'hidden' name = 'id' value = '".$id."' > <!--ID como campo oculto-->
    <input type="submit" value="Inserir"> <!--Insere o botão 'Inserir' no formulário-->
    <input type ="submit" value = 'Atualizar' > <!--Insere o botão 'Atualizar' no formulário-->
</form>

</body>
</html>
 