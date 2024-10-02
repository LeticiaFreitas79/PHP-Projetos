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

        foreach($usuarios as $usuario){
            echo "<br>Nome: : " . $usuario['nome'];
            echo "<br>Email: " . $usuario['email'];
            echo "<br>Senha: " . $usuario['senha'];
        
            echo "<form action='atualizar.php' method='POST'>
            <input type='hidden' name='nome' value='".$usuario["nome"]."'>
            <input type='hidden' name='email' value='".$usuario["email"]."'>
            <input type='hidden' name='senha' value='".$usuario["senha"]."'>";
        
            echo "<br><input type=image src='editar.png' name='action' value='editar' width=2%> ";
            echo "&nbsp&nbsp";
            echo "<img src='deletar.png' width=2%>";
            echo "<hr width=30% align='left'>";
        }
        
        if($_POST['action'] == 'editar'){
            $select = "SELECT * from usuario where nome=".$_POST['nome'];
            $dado = $conn->query($select);
            if(!empty($dado)){
                while($usuario = $dado->fetch_assoc()){
                    $nome = $usuario["nome"];
                    $email = $usuario["email"];
                    $senha = $usuario["senha"];
                }
            }
        }
        
        echo "<pre>";
        print_r($usuarios);
    ?>
</body>
</html>