<!--Status do Código: Finalizado e Comentado-->

<!DOCTYPE html>
<html lang="pt-br"> <!--Idioma da página-->
<head>
    <meta charset="UTF-8"> <!--Codificação de caracteres-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--Garante compatibilidade-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Visualização em Dispositivos Móveis-->
    <title>Atualizar</title> <!--Titúlo da página-->
</head>
<body>
    <?php
        include("connection.php"); //Conecta com o Banco de Dados.
        $getemail = $_GET["email"]; //Armazena o parâmetro 'email' na váriavel '$getemail'

        if (!empty($_GET['email'])) //Verifica se o campo 'email' está vazio. Caso não esteja, os comandos abaixo serão executados.
        {
            $query = 'SELECT * FROM usuario WHERE email = '."'$getemail'"; //Consulta o Banco para selecionar todos os campos da tabela 'usuário. O email corresponde ao valor '$getemail'.
            $retorno = $connection->query($query); //Executa a consulta no Banco de Dados e armazena o resultado na váriavel '$retorno'.
            $dados = $retorno->fetchAll(PDO::FETCH_ASSOC); //Puxa os resultados da consulta como um array associativo e armazena na váriavel '$dados'.
            foreach($dados as $dado) //Inicia um loop que itera sobre cada elemento no array '$dados'.
            {
                //Extrai os valores do array e os armazena em váriaveis.
                $nome = $dado['nome'];
                $email = $dado['email'];
                $senha = $dado['senha'];
            }
        }
        else //Caso o campo 'email' esteja vazio.
        {
            //Inicia as váriaveis como strings vazias.
            $nome = "";
            $email = "";
            $senha = "";
            $emailAntigo = "";
        }
    ?>

    <!--Inicia o formulário que será enviado para 'update.php' usando o método POST-->
    <form action="update.php" method="POST">
        <!--Cria um campo de texto, o valor preenchido a partir da váriavel-->
        Nome: <input type="text" name="nome" value="<?php echo $nome;?>"><br>
        Email: <input type="text" name="email" value="<?php echo $email;?>"><br>
        Senha: <input type="text" name="senha" value="<?php echo $senha;?>"><br>
        <!--Campo oculto que armazena o email antigo, que será enviado com o formulário-->
        <input type="hidden" name="emailAntigo" value="<?php echo $email;?>">
        <!--Adiciona o botão de envio para o formulário-->
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>