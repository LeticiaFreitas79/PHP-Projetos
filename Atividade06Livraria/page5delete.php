<!--Status do Código: em desenvolvimento-->

<?php
    include('connection.php')

    $delete = "DELETE FROM produtos WHERE id = 'item de reconhecimento'";
    $retorno = $connection->exec($delete);
    header('Location: page5delete.php');
?>