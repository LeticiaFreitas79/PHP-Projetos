<!--Status do Código: Finalizado e Comentado.-->

<?php
    //Conexão com o Banco de Dados.
    $dsn = 'mysql:host=localhost;dbname=bancoLocadora'; //Define '$dsn' (Data Source Name) como a string de conexão.
    $user = 'root'; //Usuário.
    $pass = ''; //Senha.

    $connection = new PDO($dsn, $user, $pass); //Instância da classe PDO, que representa uma conexão com o Banco.
    //O construtor recebe os argumentos acima. Essa linha estabelece a conexão com o banco de dados.
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Configura o modo de erro da conexão. 
?>