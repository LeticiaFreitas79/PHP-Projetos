<?php
    $servername = "localhost"; //Nome do Servidor.
    $username = "root"; //Nome do Usuário.
    $password = "usbw"; //Senha do Usuário.
    $dbname = "banco_locadora"; //Nome do Banco de Dados.

    //Criar Conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
        // $conn é um objeto de conexão.

    //Checar Conexão
    if ($conn->connect_error)
    {
        die("Connection failed: ".$conn -> connect_error); //Caso a conexão falhe.
    }
?>