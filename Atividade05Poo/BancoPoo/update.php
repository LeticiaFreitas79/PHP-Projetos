<!--Status do Código: em análise-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <?php
        include('connection.php');

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $emailAntigo = $_POST["emailAntigo"];

        $update = "UPDATE usuario SET
            nome = '$nome',
            email = '$email',
            senha = '$senha'
            where email = '$emailAntigo'
        ";

        $retorno = $connection->exec($update);
        header('location: exibir.php');
    ?>
</body>
</html>