<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <?php
        include("connection.php");
        $getEmail = $_GET["email"];

        if (!empty($_GET['email']))
        {
            $query = 'SELECT * FROM usuario WHERE email = '."'$getEmail'";
            $retorno = $connection->query($query);
            $dados = $retorno->fetchAll(POO::FETCH_ASSOC);
            foreach($dados as $dado)
            {
                $nome = $dado['nome'];
                $email = $dado['email'];
                $senha = $dado['senha'];
            }
        }
        else
        {
            $nome = "";
            $email = "";
            $senha = "";
            $emailAntigo = "";
        }
    ?>

    <form action="update.php" method="POST">
        Nome: <input type="text" name="nome" value="<?php echo $nome;?>"><br>
        Email: <input type="text" name="email" value="<?php echo $email;?>"><br>
        Senha: <input type="text" name="senha" value="<?php echo $senha;?>"><br>
        <input type="hidden" name="emailAntigo" value="<?php echo $email;?>">
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>