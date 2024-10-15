<!--Status do Código: em análise, mas comentado-->

<?php
    include('connection.php'); //Conexão com o Banco de Dados.

    $delete = "DELETE FROM produtos WHERE id = 'item de reconhecimento'"; //Comando SQL que realiza a exclusão de um item da tabela 'produtos' através do 'id'.
    $retorno = $connection->exec($delete); //Executa o comando SQL e armazena as informações na váriavel '$retorno'.
    header('Location: delete.php'); //Redirecionamento para a página 'delete.php'.
?>