<!--Status do Código: em análise-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir</title>
</head>
<body>
    <?php
        include("connection.php");

        $select = "SELECT * FROM usuario";
        $retorno = $connection->query($select);
        $usuarios = $retorno->fetchAll(PDO::FETCH_ASSOC);

        echo '
            <a href="inserir.php">
                <button type="button">
                    Inserir
                </button>
            </a>
        ';

        foreach($usuarios as $usuario){
            echo "<br>Nome: : " . $usuario['nome'];
            echo "<br>Email: " . $usuario['email'];
            echo "<br>Senha: " . $usuario['senha'];
               
            echo "<br><a href='atualizar.php?email=". $usuario['email'];
            echo "'><img src='editar.png' width=2%></a>";
            echo "&nbsp&nbsp";
            echo "<a href='deletar.php?email=". $usuario['email'];
            echo "'><img src='deletar.png' width=2%></a>";
            echo "<hr width=30% align='left'>";        
        }
        
        echo "<pre>";   
        print_r($usuarios);
    ?>
</body>
</html>