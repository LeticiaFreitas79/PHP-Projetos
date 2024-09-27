<!DOCTYPE html>
<html lang="pt-br"> <!--Idioma da página-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atv com Banco de Dados</title> <!--Título da janela-->
</head>
<body>  
    <?php //Abre o código PHP.
        include("conexao.php"); //Insere no arquivo atual o código presente no arquivo indicado.
        //Neste caso, o códido de 'connection.php' está sendo inserido neste arquivo através do comando include.
        
        //Declaração de Váriaveis.
        //Essas váriaveis são declaradas vazias para que os campos da tabela apareçam também vazios quando a página for carregada.
        $cnome = ""; // [...]
        $cusuario  = ""; // [...]
        $csaldo = ""; // [...]
        $csenha = ""; // [...]


        //Função que seleciona um cliente da tabela [...]
        if(!empty($_POST['selecionarcliente'])=="Atualizar") //Se o [...]
        {
            $select = "SELECT * FROM contas WHERE id=".$_POST['id']; //Puxa o a função do Banco de Dados através de um comando MySQL.
            $dado = $conn -> query($select); // A váriavel '$dado' armazena o resultado da consulta feita no banco de dados ($conn -> query($select)).
            // A váriavel '$conn' representa a conexão do arquivo com o banco de dados. Conn de Connection.
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
            $sql = "DELETE FROM contas WHERE id = ".$_POST['id'];
            $conn -> query($sql);
        }

        if (!empty($_POST['nome']))
        {
            $nome = $_POST["nome"];
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];
            $saldo = $_POST["saldo"];
    
            $sql = "INSERT INTO contas (nome, usuario, senha, saldo)
                VALUE ('$nome', '$usuario', '$senha', '$saldo')";
            $conn -> query($sql);
        }
    
        $sql = "SELECT id, nome, usuario, saldo FROM contas";
        $dados = $conn ->query($sql);    
    
        echo "<table> <tr> <th> ID </th> <th> Nome </th> <th> Usuario </th> <th> saldo </th> </tr>";
        while ($row = $dados->fetch_assoc()) 
        {
            echo"<tr> <td>".$row["id"]."</td> <td>".$row["nome"]."</td> <td>".$row["usuario"].
            "</td> <td>".$row["saldo"]."</td> <td>
            <form action = 'index.php' method = 'POST' >
                <input type = 'hidden' name = 'id' value = ' ".$row["id"]."' >
                <input type = 'submit' name= 'selecionarcliente' value = 'Atualizar' >
                <input type = 'submit' name= 'deletarcliente' value = 'Deletar' >
            </form>
            </tr>";
        }
    ?> <!--Fecha o código PHP-->
 
<form action="index.php" method="POST">
    Nome: <input type="text" name="nome" value ="<?php echo $cnome;?>"><br>
    Usuario: <input type="text" name="usuario" value ="<?php echo $cusuario;?>"><br>
    Senha: <input type="text" name="senha" value ="<?php echo $csenha;?>"><br>
    Saldo: <input type="text" name="saldo" value ="<?php echo $csaldo;?>"><br>
    <input type = 'hidden' name = 'id' value = '".$id."' >
    <input type="submit" value="Inserir">
    <input type ="submit" value = 'Atualizar' >
</form>

</body>
</html>
 